<?php

namespace App\Http\Controllers\Activity;

use Illuminate\Support\Facades\Validator;
use App\Http\Functions\App_Activitys;
use App\Http\Controllers\Controller;
use App\Http\Functions\DateExtract;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Rules\DateValidator;
use App\Models\Task_details;
use App\Models\Task;

class ActivityController extends Controller
{
    //
    public function index()
    {
        $counts = [
            'Completed' => App_Activitys::App_Activitys('count','Completed',auth()->user()->id),
            'Pending' => App_Activitys::App_Activitys('count','Pending',auth()->user()->id),
            'Today' => App_Activitys::App_Activitys('count','Today',auth()->user()->id),
            'Failed' => App_Activitys::App_Activitys('count','Failed',auth()->user()->id),
            'Total' => App_Activitys::App_Activitys('count','Total',auth()->user()->id),
        ];

        $counts['Failed'] != 0 ? $failed = App_Activitys::App_Activitys('get','Failed',auth()->user()->id) : $failed = [];
        $counts['Completed'] != 0 ? $completed = App_Activitys::App_Activitys('get','Completed',auth()->user()->id) : $completed = [];
        $counts['Pending'] != 0 ? $pending = App_Activitys::App_Activitys('get','Pending',auth()->user()->id) : $pending = [];
        $counts['Today'] != 0 ? $today = App_Activitys::App_Activitys('get','Today',auth()->user()->id) : $today = [];

        $task = [
            'Completed' => $completed,
            'Pending' => $pending,
            'Today' => $today,
            'Failed' => $failed,
        ];

        return view('pages.task.index', compact('task', 'counts'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'description' => 'required',
            'date_extends' => ['required','min:1', new DateValidator],
            'type' => 'required|in:School,Family,Private,Work,Other',
            'status' => 'required|in:Pending,Completed,Failed',
            'priority' => 'required|in:Low,Medium,High',
            'color_priority' => ['required', 'regex:/^(\#[\da-f]{3}|\#[\da-f]{6}|rgba\(((\d{1,2}|1\d\d|2([0-4]\d|5[0-5]))\s*,\s*){2}((\d{1,2}|1\d\d|2([0-4]\d|5[0-5]))\s*)(,\s*(0\.\d+|1))\)|hsla\(\s*((\d{1,2}|[1-2]\d{2}|3([0-5]\d|60)))\s*,\s*((\d{1,2}|100)\s*%)\s*,\s*((\d{1,2}|100)\s*%)(,\s*(0\.\d+|1))\)|rgb\(((\d{1,2}|1\d\d|2([0-4]\d|5[0-5]))\s*,\s*){2}((\d{1,2}|1\d\d|2([0-4]\d|5[0-5]))\s*)|hsl\(\s*((\d{1,2}|[1-2]\d{2}|3([0-5]\d|60)))\s*,\s*((\d{1,2}|100)\s*%)\s*,\s*((\d{1,2}|100)\s*%)\))$/'],
            'color_header' => ['required','regex:/^(\#[\da-f]{3}|\#[\da-f]{6}|rgba\(((\d{1,2}|1\d\d|2([0-4]\d|5[0-5]))\s*,\s*){2}((\d{1,2}|1\d\d|2([0-4]\d|5[0-5]))\s*)(,\s*(0\.\d+|1))\)|hsla\(\s*((\d{1,2}|[1-2]\d{2}|3([0-5]\d|60)))\s*,\s*((\d{1,2}|100)\s*%)\s*,\s*((\d{1,2}|100)\s*%)(,\s*(0\.\d+|1))\)|rgb\(((\d{1,2}|1\d\d|2([0-4]\d|5[0-5]))\s*,\s*){2}((\d{1,2}|1\d\d|2([0-4]\d|5[0-5]))\s*)|hsl\(\s*((\d{1,2}|[1-2]\d{2}|3([0-5]\d|60)))\s*,\s*((\d{1,2}|100)\s*%)\s*,\s*((\d{1,2}|100)\s*%)\))$/'],
        ]);
        if($validator->fails()) {
            return response()->json([ $validator->errors() ], 401);
        }
        $valor = DateExtract::subtrDate($request->date_extends);

        try{
            DB::beginTransaction();
            $task = [
                'user_id' => auth()->user()->id,
                'name' => $request->name,
                'description' => $request->description,
                'start_date' => $valor[0],
                'due_date' => $valor[1],
            ];
            $task_details = [
                'task_id' => Task::create($task)->id,
                'type' => $request->type,
                'priority' => $request->priority,
                'color_priority' => $request->color_priority,
                'color_head' => $request->color_header,
                'status' => $request->status,
            ];
            Task_details::create($task_details);

            DB::commit();
        }catch(\Exception $e){
            DB::rollBack();
            return response()->json(['error' => 'Please reload the page with the error message.'], 401);
        }

        $render = App_Activitys::renderActivity(auth()->user()->id);
        return response()->json([$render,'Successfully created activity']);
    }

    public function edit($id){
        $task = Task::join('task_details','task_details.task_id','=','tasks.id')
            ->where('user_id', auth()->user()->id)
            ->where('tasks.id',$id)
            ->first();

        return response()->json([null,$task]);
    }

    public function update(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'description' => 'required',
            'date_extends' => ['required','min:1', new DateValidator],
            'type' => 'required|in:School,Family,Private,Work,Other',
            'status' => 'required|in:Pending,Completed,Failed',
            'priority' => 'required|in:Low,Medium,High',
            'color_priority' => ['required', 'regex:/^(\#[\da-f]{3}|\#[\da-f]{6}|rgba\(((\d{1,2}|1\d\d|2([0-4]\d|5[0-5]))\s*,\s*){2}((\d{1,2}|1\d\d|2([0-4]\d|5[0-5]))\s*)(,\s*(0\.\d+|1))\)|hsla\(\s*((\d{1,2}|[1-2]\d{2}|3([0-5]\d|60)))\s*,\s*((\d{1,2}|100)\s*%)\s*,\s*((\d{1,2}|100)\s*%)(,\s*(0\.\d+|1))\)|rgb\(((\d{1,2}|1\d\d|2([0-4]\d|5[0-5]))\s*,\s*){2}((\d{1,2}|1\d\d|2([0-4]\d|5[0-5]))\s*)|hsl\(\s*((\d{1,2}|[1-2]\d{2}|3([0-5]\d|60)))\s*,\s*((\d{1,2}|100)\s*%)\s*,\s*((\d{1,2}|100)\s*%)\))$/'],
            'color_header' => ['required','regex:/^(\#[\da-f]{3}|\#[\da-f]{6}|rgba\(((\d{1,2}|1\d\d|2([0-4]\d|5[0-5]))\s*,\s*){2}((\d{1,2}|1\d\d|2([0-4]\d|5[0-5]))\s*)(,\s*(0\.\d+|1))\)|hsla\(\s*((\d{1,2}|[1-2]\d{2}|3([0-5]\d|60)))\s*,\s*((\d{1,2}|100)\s*%)\s*,\s*((\d{1,2}|100)\s*%)(,\s*(0\.\d+|1))\)|rgb\(((\d{1,2}|1\d\d|2([0-4]\d|5[0-5]))\s*,\s*){2}((\d{1,2}|1\d\d|2([0-4]\d|5[0-5]))\s*)|hsl\(\s*((\d{1,2}|[1-2]\d{2}|3([0-5]\d|60)))\s*,\s*((\d{1,2}|100)\s*%)\s*,\s*((\d{1,2}|100)\s*%)\))$/'],
        ]);
        if($validator->fails()) {
            return response()->json([ $validator->errors() ], 401);
        }
        $valor = DateExtract::subtrDate($request->date_extends);

        try{
            DB::beginTransaction();
            $task = [
                'name' => $request->name,
                'description' => $request->description,
                'start_date' => $valor[0],
                'due_date' => $valor[1],
                'type' => $request->type,
                'priority' => $request->priority,
                'color_priority' => $request->color_priority,
                'color_head' => $request->color_header,
                'status' => $request->status,
            ];

            DB::table('tasks')
                ->join('task_details','task_details.task_id','=','tasks.id')
                ->where('tasks.id',$request->id)->update($task);

            DB::commit();
        }catch(\Exception $e){
            DB::rollBack();
            return response()->json(['error' => 'Please reload the page with the error message.'], 401);
        }

        $render = App_Activitys::renderActivity(auth()->user()->id);
        return response()->json([$render, 'Task updated successfully.']);
    }

    public function show($id){
        $task = Task::join('task_details','task_details.task_id','=','tasks.id')
            ->where('user_id', auth()->user()->id)
            ->where('tasks.id',$id)
            ->firstOrFail();

        return view('pages.task.show', compact('task'));
    }

    public function destroy($id)
    {
        if(Task::where('id', $id)->where('user_id', auth()->user()->id)->count() == 0){
            return response()->json(['error' => 'Please reload the page with the error message.'], 401);
        }else{
            Task::where('id', $id)->where('user_id', auth()->user()->id)->delete();

            $render = App_Activitys::renderActivity(auth()->user()->id);

            return response()->json([$render ,'Task deleted successfully.']);
        }
    }
}

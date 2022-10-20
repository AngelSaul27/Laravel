<?php
namespace App\Http\Functions;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Blade;

class App_Activitys{

    public static function App_Activitys($function,$status, $user_id){
        if($function == 'count'){
            if($status == 'Total'){
                return self::getCountActivity($user_id, 'Total');
            }
            if($status == 'Today'){
                return self::getCountActivity($user_id, 'Today');
            }
            if($status == 'Pending'){
                return self::getCountActivity($user_id, 'Pending');
            }
            if($status == 'Completed'){
                return self::getCountActivity($user_id, 'Completed');
            }
            if($status == 'Failed'){
                return self::getCountActivity($user_id, 'Failed');
            }
        }
        if($function == 'get'){
            if($status == 'Total'){
                return self::getDataActivity($user_id, 'Total');
            }
            if($status == 'Today'){
                return self::getDataActivity($user_id, 'Today');
            }
            if($status == 'Pending'){
                return self::getDataActivity($user_id, 'Pending');
            }
            if($status == 'Completed'){
                return self::getDataActivity($user_id, 'Completed');
            }
            if($status == 'Failed'){
                return self::getDataActivity($user_id, 'Failed');
            }
        }
        return 'Error';
    }

    public static function getCountActivity($user_id, $status){
        $count = DB::table('tasks')
        ->join('task_details', 'tasks.id', '=', 'task_details.task_id')
        ->where('tasks.user_id', $user_id)
        ->when($status === 'Completed', function($query){
            $query->where('task_details.status', 'Completed');
        })
        ->when($status === 'Today', function($query){
            $query->where('task_details.status', '!=','Failed')
            ->where('start_date', now()->format('Y-m-d'))
            ->where('due_date','>=',now()->format('Y-m-d'))
            ->where('status', '!=', 'Completed');
        })
        ->when($status === 'Pending', function($query){
            $query->where('task_details.status', 'Pending')
            ->where('start_date', '>',now()->format('Y-m-d'))
            ->where('task_details.status', '!=','Completed')
            ->where('task_details.status', '!=','Failed')
            ->where('start_date','!=',now()->format('Y-m-d'));
        })
        ->when($status === 'Failed', function($query){
            $query->where('task_details.status', 'Failed');
        })
        ->count();
        return $count;
    }

    public static function getDataActivity($user_id, $status){
        $data = DB::table('tasks')
        ->join('task_details', 'tasks.id', '=', 'task_details.task_id')
        ->where('tasks.user_id', $user_id)
        ->when($status === 'Completed', function($query){
            $query->where('task_details.status', 'Completed');
        })
        ->when($status === 'Today', function($query){
            $query->where('task_details.status', '!=','Failed')
            ->where('start_date', now()->format('Y-m-d'))
            ->where('due_date','>=',now()->format('Y-m-d'))
            ->where('status', '!=', 'Completed');
        })
        ->when($status === 'Pending', function($query){
            $query->where('task_details.status', 'Pending')
                ->where('start_date', '>',now()->format('Y-m-d'))
                ->where('task_details.status', '!=','Completed')
                ->where('task_details.status', '!=','Failed')
                ->where('start_date','!=',now()->format('Y-m-d'));
        })
        ->when($status === 'Failed', function($query){
            $query->where('task_details.status', 'Failed');
        })
        ->get();
        return $data;
    }

    public static function renderActivity(){
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

        $layout_1 = Blade::render('components/task/task-layout-one', compact('counts', 'task'), deleteCachedView: false);
        $layout_2 = Blade::render('components/task/task-layout-two', compact('counts', 'task'), deleteCachedView: false);
        $layout_3 = Blade::render('components/task/task-layout-three', compact('counts', 'task'), deleteCachedView: false);
        $layout_4 = Blade::render('components/task/board-render', compact('counts'), deleteCachedView: false);

        $render = [
            'layout_1' => $layout_1,
            'layout_2' => $layout_2,
            'layout_3' => $layout_3,
            'board_render' => $layout_4,
        ];

        return $render;
    }
}


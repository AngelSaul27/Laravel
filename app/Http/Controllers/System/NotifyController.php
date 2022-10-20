<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notify;

class NotifyController extends Controller
{
    //
    public function index(){

    }

    public function create(){

    }

    public function store(){

    }

    public function edit(){

    }

    public function update($id){
        if(Notify::where('user_id', auth()->user()->id)->where('is_read', 0)->where('id',$id)->count() > 0){
            Notify::where('user_id', auth()->user()->id)->find($id)->update(['is_read' => 1]);
            if(Notify::where('user_id', auth()->user()->id)->where('is_read', 0)->count() <= 0){
                return ['response' => true, 'message' => 'Notification is marked as read', 'status' => 'success', 'action' => 'update'];
            }else{
                return ['response' => false, 'message' => 'This notification has been marked as read', 'status' => 'danger', 'action' => 'update'];
            }
        }else{

            return ['response' => false, 'message' => 'This notification has been marked as read', 'status' => 'danger', 'action' => 'update'];
        }
        return abort(404);
    }

    public function destroy($id){
        Notify::where('id', $id)->where('user_id', auth()->user()->id)->delete();
        if(Notify::where('id', $id)->where('user_id', auth()->user()->id)->count() <= 0){
            return ['response' => true, 'message' => 'Susseccfully deleted notificación', 'status' => 'success', 'action' => 'delete'];
        }else{
            return ['response' => false, 'message' => 'Susseccfully deleted notificación', 'status' => 'success', 'action' => 'delete'];
        }
        return abort(404);
    }

}

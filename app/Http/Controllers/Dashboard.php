<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notify;
use Illuminate\Support\Facades\DB;

class Dashboard extends Controller
{
    //
    public function index()
    {
        return view('dashboard');
    }
}

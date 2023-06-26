<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $email = Auth::user()->email;
        $logs = DB::select("SELECT * FROM activity_log WHERE email = '$email' AND type = 'Community'");

        // dd($logs);

        return view('community.admin.log', ['logs' => $logs]);
    }

    public function all()
    {
        
        
        $users = DB::select("SELECT users.*, COUNT(activity_log.id) AS total FROM users, activity_log WHERE activity_log.email = users.email AND activity_log.type = 'Community' GROUP BY users.id");
        
        return view('community.admin.log_all', ['user' => $users]);
    }

    public function log($id)
    {
        $logs = DB::select("SELECT * FROM activity_log WHERE email = '$id' AND type = 'Community'");

        dd($logs);

        return view('community.admin.log_user', ['logs' => $logs]);
    }
}

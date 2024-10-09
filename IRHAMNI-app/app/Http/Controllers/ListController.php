<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\Skripsi;

class ListController extends Controller
{
    public function index(){
        $admins = Admin::all();
        $users = User::all();
        $skripsis = Skripsi::all();
        

        return view('welcome', compact('admins', 'users', 'skripsis'));
    }
}

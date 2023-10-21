<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControler extends Controller
{
    public function index(){
        $users = User::all();
        return view('users.index', [
            'users' => $users
        ]);
    }
}

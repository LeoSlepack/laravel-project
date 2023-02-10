<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    
    public function index() {

        $users = User::all();
        return view('user.index', [
            'usuarios' => $users
        ]);

    }

    public function show($id) {

        $user = User::find($id);
        return view('user.show', [
            'user' => $user
        ]);

    }

    public function edit($id) {

        dd($id);

    }
}

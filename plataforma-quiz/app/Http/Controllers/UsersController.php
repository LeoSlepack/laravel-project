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

    public function create($id) {

        return view('user.create');

    }

    public function show($id) {

        $user = User::find($id);
        return view('user.show', [
            'user' => $user
        ]);

    }

    public function edit($id) {

        $user = User::find($id);
        return view('user.edit', [
            'user' => $user
        ]);

    }

    public function update(Request $request, $id){

        $data = $request->only(['name', 'email']);
        $user = User::find($id);
        $user->update($data);
        return redirect()->back();

    }

    public function destroy($id) {

        $user = User::find($id);
        $user->delete();
        return redirect()->back();

    }
}

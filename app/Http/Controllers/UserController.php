<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users', compact('users'));
    }

    // public function store(Request $request)
    // {
    //     $user = new User();
    //     $user->name = $request->name;
    //     $user->lastname = $request->lastname;
    //     $user->email = $request->email;
    //     $user->password = Hash::make($request->password);

    //     $user->save();
    //     return $user;
    // }

    // public function update(Request $request, string $id){
    //     $user = User::findOrFail();
    //     $user->name = $request->name;
    //     $user->lastname = $request->lastname;
    //     $user->email = $request->email;
    //     $user->password = Hash::make($request->password);

    //     $user->save();
    //     return $user;
    // }

    public function destroy(string $id)
    {
        $user = User::destroy($id);
        return $user;
    }
}

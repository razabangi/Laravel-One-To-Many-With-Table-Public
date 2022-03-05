<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        // filter | get users which have post
        // $users = User::has('posts')->with('posts')->get();

        // filter | get users which have post length greater than 2
        // $users = User::has('posts', '>=', 2)->with('posts')->get();

        // filter | get users which have this wild card title
        // $users = User::whereHas('posts', function ($q) {
        //     $q->where('title', 'like', "%Four%");
        // })->with('posts')->get();

        // filter | get users which have not post
        // $users = User::doesntHave('posts')->with('posts')->get();

        return view("user", compact('users'));
    }
}

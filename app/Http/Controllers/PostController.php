<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create($id)
    {
        Post::create([
            'title' => "Red Carpet",
            'slug' => "rich-dad",
            'status' => "active",
            'user_id' => $id,
        ]);
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostApiController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        return response()->json($posts);
    }
    public function show($id)
    {
        $post = Post::find($id);

        if (!$post) {
            return response()->json(['message' => 'Пост не знайдено'], 404);
        }

        return response()->json($post);
    }
}


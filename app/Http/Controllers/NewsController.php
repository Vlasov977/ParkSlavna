<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class NewsController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 'PUBLISHED')->get();

        return view('blog', compact('posts'));
    }

    public function post($id = null)
    {
        $post = Post::where('id', $id)->firstOrFail();

        $next = Post::where('id', '>', $post->id)->orderBy('id')->first();

        $post->total_views = $post->total_views + 1;
        $post->save();

        return view('post',compact('post', 'next'));
    }
}

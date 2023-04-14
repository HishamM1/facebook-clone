<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return inertia('Home', [
        'posts'=> Post::with('user')->orderBy('created_at','desc')->get(),
        'likes'=> auth()->user()->likes()->get(['post_id'])->pluck('post_id')->toArray(),
    ]);
    }
}

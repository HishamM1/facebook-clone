<?php

namespace App\Http\Controllers;

use App\Models\comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'content' => ['required', 'string', 'max:255'],
            'image' => ['nullable', 'image', 'max:2048'],
            'post_id' => ['required', 'exists:posts,id'],
        ]);
        if ($request->hasFile('image')) {
            $request->file('image')->store('comments_images','public');
        }
        $comment = $request->all();
        auth()->user()->comments()->create($comment);
    }

    /**
     * Display the specified resource.
     */
    public function show(comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(comment $comment)
    {
        $comment->delete();
        return back();
    }
}

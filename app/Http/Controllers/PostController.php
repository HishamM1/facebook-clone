<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     //
    // }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'content' => ['string', 'max:600','nullable'],
            'visibility' => ['required', 'in:public,private,friends'],
            'image' => ['nullable', 'image', 'max:2048'],
        ]);
        
        if ($request->hasFile('image')) {
            $filename = request()->user()->id . '.' . Str::uuid() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('images',$filename ,'public');
            $validatedData['image'] = $filename;
        }
            
        auth()->user()->posts()->create($validatedData);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
    }
}

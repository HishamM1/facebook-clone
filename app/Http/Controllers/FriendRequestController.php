<?php

namespace App\Http\Controllers;

use App\Models\friendRequest;
use Illuminate\Http\Request;

class FriendRequestController extends Controller
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
            'receiver_id' => ['required', 'exists:users,id'],
        ]);

        auth()->user()->friendRequests()->create([
            'receiver_id' => $request->receiver_id,
        ]);

        
    }

    /**
     * Display the specified resource.
     */
    public function show(friendRequest $friendRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(friendRequest $friendRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, friendRequest $friendRequest)
    {

        $request->validate([
            'status' => ['required', 'in:accepted,rejected'],
        ]);

        $friendRequest->update([
            'status' => $request->status,
        ]);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(friendRequest $friendRequest)
    {
        $friendRequest->delete();
        
    }
}

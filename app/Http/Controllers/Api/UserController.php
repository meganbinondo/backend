<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return User::all();
    }

    
    /**
     * Store a newly created resource in storage.
     */
    // public function store(UserRequest $request)
    // {
    //     // Retrieve the validated input data...
    //     $validated = $request->validated();

    //     $carouselItem = User::create($validated);

    //     return $carouselItem;
    // }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     return User::findOrfail($id);
    // }
    

    /**
     * Update the specified resource in storage.
     */
    // public function update(UserRequest $request, string $id)
    // {
    //     // Retrieve the validated input data...
    //     $validated = $request->validated();

    //     $carouselItem = User::findOrfail($id);

    //     $carouselItem->update($validated);

    //     return $carouselItem;
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrfail($id);
 
        $user->delete();

        return $user;
    }
}
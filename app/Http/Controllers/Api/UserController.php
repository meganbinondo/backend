<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
    public function store(UserRequest $request)
    {
        // Retrieve the validated input data...
        $validated = $request->validated();

        $validated["password"] = Hash::make($validated["password"]);

        $user = User::create($validated);

        return $user;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return User::findOrfail($id);
    }
    

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
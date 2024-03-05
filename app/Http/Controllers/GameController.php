<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Http\Requests\StoregamesRequest;
use App\Http\Requests\UpdategamesRequest;

class GameController extends Controller
{

    //deletePlayerGames
    //throwDice
    //getPlaterGames

    
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
    public function store(StoregamesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $games)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $games)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdategamesRequest $request, Game $games)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $games) 
    {
        //
    }
}

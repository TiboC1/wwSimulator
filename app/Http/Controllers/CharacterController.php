<?php

namespace App\Http\Controllers;

use App\Character;
use App\User;
use App\Event;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Character $character)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Character $character)
    {
        return view('/character/create', compact('character'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Event $event, User $user, Character $character)
    {
        // validate the data from form

        $data = $request->validate([
            'name' => 'required|max:30',
        ]);

        // Persist data to database

        auth()->user()->character()->update([
            'name' => $data['name'],
        ]);

        // return view

        return view('/game/show', compact('character', 'event', 'user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function show(Character $character)
    {
        return view('/character/show', compact('character'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function edit(Character $character)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Character $character, Event $event, User $user)
    {
        // get data
        $event_id = $request('event_id');
        $choice = $request('choice_number');
        $event = Event::find($event_id);

        // setting correct choice params

        $health = "choice{$choice}health";
        $mental = "choice{$choice}mental";
        $bravery = "choice{$choice}bravery";

        // perform calculations to manipulate existing values

        $updatedPhysicalHealth = auth()->user()->character->health - $event->$health;
        $updatedMentalHealth = auth()->user()->character->health - $event->$mental;
        $updatedBravery = auth()->user()->character->health - $event->$bravery;

        // Persist new data to database

        auth()->user()->character()->update([
            'physical_health' => $updatedPhysicalHealth,
            'mental_health' => $updatedMentalHealth,
            'bravery' => $updatedBravery,
        ]);

        // Return view

        return view('/game/show', compact('event', 'character', 'user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function destroy(Character $character)
    {
        //
    }
}

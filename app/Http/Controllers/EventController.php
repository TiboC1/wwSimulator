<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Character;
use App\Event;
use App\User;

class EventController extends Controller
{
    public function index(Character $character, Event $event, User $user)
    {
        return view('/game/show', compact('event', 'character', 'user'));
    }
}

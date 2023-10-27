<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function home() : mixed {
        $teamObj = new Team;
        return view('frontend.cricketHome');
    }
}
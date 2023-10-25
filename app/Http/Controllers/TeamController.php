<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function teamStore() : mixed {
        return view('admin/add_team');
    }
}
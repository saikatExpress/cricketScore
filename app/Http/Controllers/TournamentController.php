<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreTournamentRequest;
use App\Http\Requests\UpdateTournamentRequest;

class TournamentController extends Controller
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
    public function store(StoreTournamentRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'tournament_name'  => 'required|max:255',
            'tournament_logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        if ($validator->fails()) {
            return redirect('/tournament')
                        ->withErrors($validator)
                        ->withInput();
        }

        $tournamentName = $request->input('tournament_name');
        $tournamentLogo = $request->file('tournament_logo');

        $imagePath = $tournamentLogo->store('uploads', 'public');

        $tournamentObj = new Tournament();

        $tournamentObj->tournament_name = $tournamentName;
        $tournamentObj->tournament_logo = $imagePath;

        $res = $tournamentObj->save();

        if($res) {
            return redirect('/tournament')->with('success', 'Tournament Create Success');
        }
     }

    /**
     * Display the specified resource.
     */
    public function show(Tournament $tournament)
    {
        $tournamentObj = new Tournament();
        $tournamentData = $tournamentObj->all();
        return view('admin.tournament', ['tournamentData' => $tournamentData]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tournament $tournament)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTournamentRequest $request, Tournament $tournament)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tournament $tournament)
    {
        //
    }
}
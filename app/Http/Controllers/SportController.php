<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use App\Models\Team;
use App\Models\Tournament;
use App\Http\Requests\StoreSportRequest;
use App\Http\Requests\UpdateSportRequest;

class SportController extends Controller
{
    public Team $teamObj;

    public function __construct(){
        $this->teamObj = new Team();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

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
    public function store(StoreSportRequest $request)
    {
        $validated = $request->validated();

        return 123;
        // Retrieve a portion of the validated input data...
        $validated = $request->safe()->only(['match_type']);
    }

    /**
     * Display the specified resource.
     */
    public function cricketMatch()
    {
        $tournamentObj = new Tournament;
        $teamData = $this->teamObj->where('team_type', '1')->get();
        $tournamentData = $tournamentObj->all();
        return view('admin/cricket_match',(['teamData' => $teamData, 'tournamentData' => $tournamentData]));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sport $sport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSportRequest $request, Sport $sport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sport $sport)
    {
        //
    }
}
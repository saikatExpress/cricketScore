<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{
    public Team $teamObj;


    public function __construct(){
        $this->teamObj = new Team();
    }

    public function index() : mixed {
        $teamData = $this->teamObj->all();
        return view('admin/team_list', ['teamData' => $teamData]);
    }

    public function teamStore() : mixed {
        return view('admin/add_team');
    }

    public function store(Request $request) : mixed {
        $validator = Validator::make($request->all(), [
            'team-name'  => 'required|max:255',
            'team-image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'team-type'  => 'required',
            'team-area'  => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('/team')
                        ->withErrors($validator)
                        ->withInput();
        }

        $teamName = $request->input('team-name');
        $teamImage = $request->file('team-image');
        $teamType = $request->input('team-type');
        $teamArea = $request->input('team-area');

        $imagePath = $teamImage->store('uploads', 'public');

        $this->teamObj->team_name = $teamName;
        $this->teamObj->team_image = $imagePath;
        $this->teamObj->team_type = $teamType;
        $this->teamObj->team_area = $teamArea;

        $res = $this->teamObj->save();

        if($res){
            return redirect('/team')->with('success', 'Team created successfully');
        }
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use App\Repositories\TeamMemberRepository;
use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    public function index()
    {
        return view('team');
    }

    public function show(TeamMember $teamMember)
    {
        return view('teamMember', [
            'teamMember' => $teamMember,
        ]);
    }
}

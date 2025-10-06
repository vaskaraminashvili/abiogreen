<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use App\Repositories\TeamMemberRepository;
use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    public function index()
    {
        $teamMemberRepository = resolve(TeamMemberRepository::class);
        $teamMembers = $teamMemberRepository->activePaginate();
        return view('team.index', [
            'teamMembers' => $teamMembers,
        ]);
    }

    public function show(TeamMember $teamMember)
    {
        return view('team.show', [
            'teamMember' => $teamMember,
        ]);
    }
}

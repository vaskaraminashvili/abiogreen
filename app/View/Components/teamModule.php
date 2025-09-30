<?php

namespace App\View\Components;

use App\Repositories\TeamMemberRepository;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class teamModule extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $teamMembersRepository = resolve(TeamMemberRepository::class);  
        $teamMembers = $teamMembersRepository->active();
        return view('components.team-module', compact('teamMembers'));
    }
}

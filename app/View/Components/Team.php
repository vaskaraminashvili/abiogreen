<?php

namespace App\View\Components;

use Closure;
use App\Repositories\TeamMemberRepository;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Team extends Component
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
        $teamMemberRepository = resolve(TeamMemberRepository::class);
        $teamMembers = $teamMemberRepository->activePaginate();
        return view('components.team', compact('teamMembers'));
    }
}

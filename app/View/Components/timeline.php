<?php

namespace App\View\Components;

use App\Repositories\TimelineEventRepository;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class timeline extends Component
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
        $timelineEventRepository = resolve(TimelineEventRepository::class);
        $timelineEvents = $timelineEventRepository->active();

          return view('components.timeline', ['timelineEvents' => $timelineEvents]);
    }
}

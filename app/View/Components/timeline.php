<?php

namespace App\View\Components;

use App\Repositories\TimelineEventRepository;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Timeline extends Component
{
    public $events;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $timelineEventRepository = resolve(TimelineEventRepository::class);
        $this->events = $timelineEventRepository->active();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.timeline');
    }
}
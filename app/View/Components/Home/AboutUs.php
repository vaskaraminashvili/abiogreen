<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Repositories\StatsRepository;

class AboutUs extends Component
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
        $statsRepository = resolve(StatsRepository::class);
        $stats = $statsRepository->active(6);
        return view('components.home.about-us', compact('stats'));
    }
}

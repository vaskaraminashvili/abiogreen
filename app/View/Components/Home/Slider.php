<?php

namespace App\View\Components\Home;

use App\Repositories\SlideRepository;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Slider extends Component
{
    public $slides;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $slideRepository = resolve(SlideRepository::class);
        $this->slides = $slideRepository->active();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.slider');
    }
}

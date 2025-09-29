<?php

namespace App\View\Components\Home;

use Closure;
use App\Repositories\NewsRepository;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlogArea extends Component
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
        $newsRepo = resolve(NewsRepository::class);
        $news = $newsRepo->active();
        return view('components.home.blog-area', compact('news'));
    }
}

<?php

namespace App\View\Components;

use App\Repositories\SubCompanyRepository;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ServiceArea extends Component
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
        $subCompaniesRepository = resolve(SubCompanyRepository::class);
        $subCompanies = $subCompaniesRepository->active(4);
        return view('components.service-area', compact('subCompanies'));
    }
}

<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Repositories\PartnerCompanyRepository;

class PartnerCompany extends Component
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
        $partnerCompanyRepository = resolve(PartnerCompanyRepository::class);
        $partnerCompanies = $partnerCompanyRepository->active();
        return view('components.home.partner-company', compact('partnerCompanies'));
    }
}

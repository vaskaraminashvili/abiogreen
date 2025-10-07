<?php

namespace App\Http\Controllers;

use App\Models\SubCompany;
use Illuminate\Http\Request;

class SubCompanyController extends Controller
{
    public function index()
    {
        return view('holdings.index');
    }

    public function show(SubCompany $subCompany)
    {
        return view('subCompany.show', compact('subCompany'));
    }
}

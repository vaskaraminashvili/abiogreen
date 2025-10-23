<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Repositories\NewsRepository;
use App\Repositories\SubCompanyRepository;

class NewsController extends Controller
{
    protected $newsRepository;

    protected $subCompanyRepository;

    public function __construct(
        NewsRepository $newsRepository,
        SubCompanyRepository $subCompanyRepository
    ) {
        $this->newsRepository = $newsRepository;
        $this->subCompanyRepository = $subCompanyRepository;
    }

    public function index()
    {
        $news = $this->newsRepository->activePaginate();

        return view('news.index', [
            'news' => $news,
        ]);
    }

    public function company(int $company)
    {
        $subCompany = $this->subCompanyRepository->find($company);

        if (! $subCompany) {
            abort(404);
        }

        $news = $this->newsRepository->activeBySubCompany($company);

        return view('news.index', [
            'news' => $news,
            'subCompany' => $subCompany,
        ]);
    }

    public function show(News $news)
    {
        $recentNews = $this->newsRepository->active(3, $news->id);
        $companies = $this->subCompanyRepository->active();

        return view('news.show', [
            'news' => $news,
            'recentNews' => $recentNews,
            'companies' => $companies,
        ]);
    }
}

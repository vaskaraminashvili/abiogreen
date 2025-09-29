<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Repositories\NewsRepository;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    protected $newsRepository;

    public function __construct(NewsRepository $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }
    public function index()
    {
        $news = $this->newsRepository->activePaginate();
        return view('news.index', [
            'news' => $news,
        ]);
    }

    public function show(News $news)
    {
        $recentNews = $this->newsRepository->active(3, $news->id);
        return view('news.show', [
            'news' => $news,
            'recentNews' => $recentNews,
        ]);
    }
}

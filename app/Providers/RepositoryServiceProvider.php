<?php

namespace App\Providers;

use App\Repositories\GalleryRepository;
use App\Repositories\NewsRepository;
use App\Repositories\ProjectRepository;
use App\Repositories\SlideRepository;
use App\Repositories\StatsRepository;
use App\Repositories\SubCompanyRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(SlideRepository::class, SlideRepository::class);
        $this->app->bind(NewsRepository::class, NewsRepository::class);
        $this->app->bind(GalleryRepository::class, GalleryRepository::class);
        $this->app->bind(StatsRepository::class, StatsRepository::class);
        $this->app->bind(SubCompanyRepository::class, SubCompanyRepository::class);
        $this->app->bind(ProjectRepository::class, ProjectRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

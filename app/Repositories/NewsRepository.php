<?php

namespace App\Repositories;

use App\Models\News;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class NewsRepository
{
    public function all(): Collection
    {
        return News::with('subCompany')->orderBy('created_at', 'desc')->get();
    }

    public function published(): Collection
    {
        return News::with('subCompany')->published()->orderBy('publish_date', 'desc')->get();
    }

    public function active($limit = 3, $except = null): Collection
    {
        return News::with('subCompany')
            ->active()
            ->when($except, function ($query) use ($except) {
                return $query->where('id', '!=', $except);
            })
            ->orderBy('publish_date', 'desc')
            ->limit($limit)
            ->get();
    }

    public function activePaginate($limit = 15): LengthAwarePaginator
    {
        return News::with('subCompany')->active()->orderBy('publish_date', 'desc')->paginate($limit);
    }

    public function activeBySubCompany(int $subCompanyId, $limit = 15): LengthAwarePaginator
    {
        return News::with('subCompany')
            ->active()
            ->where('sub_company_id', $subCompanyId)
            ->orderBy('publish_date', 'desc')
            ->paginate($limit);
    }

    public function find(int $id): ?News
    {
        return News::with('subCompany')->find($id);
    }

    public function findBySlug(string $slug): ?News
    {
        return News::with('subCompany')->where('slug', $slug)->first();
    }

    public function create(array $data): News
    {
        return News::create($data);
    }

    public function update(News $news, array $data): bool
    {
        return $news->update($data);
    }

    public function delete(News $news): bool
    {
        return $news->delete();
    }
}

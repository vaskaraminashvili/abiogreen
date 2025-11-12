<?php

namespace App\Repositories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class ProjectRepository
{
    public function __construct(
        protected Project $model
    ) {}

    public function all(): Collection
    {
        return $this->model
            ->orderBy('sort')
            ->orderByDesc('created_at')
            ->get();
    }

    public function activePaginate($limit = null): LengthAwarePaginator
    {
        return $this->model
            ->newQuery()
            ->active()
            ->orderBy('sort')
            ->orderByDesc('created_at')
            ->paginate($limit);
    }

    public function active($limit = null): Collection
    {
        $query = $this->model
            ->newQuery()
            ->active()
            ->orderBy('sort')
            ->orderByDesc('created_at');

        if ($limit !== null) {
            $query->limit($limit);
        }

        return $query->get();
    }

    public function find(int $id): ?Project
    {
        return $this->model->find($id);
    }

    public function create(array $data): Project
    {
        return $this->model->create($data);
    }

    public function update(Project $project, array $data): bool
    {
        return $project->update($data);
    }

    public function delete(Project $project): bool
    {
        return $project->delete();
    }

    public function getNextSortOrder(): int
    {
        return ($this->model->max('sort') ?? 0) + 1;
    }

    public function reorder(array $sortedIds): void
    {
        foreach ($sortedIds as $index => $id) {
            $this->model
                ->whereKey($id)
                ->update(['sort' => $index + 1]);
        }
    }
}

<?php

namespace App\Repositories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class ProjectRepository
{
    public function all(): Collection
    {
        return Project::orderBy('created_at', 'desc')->get();
    }

    public function activePaginate($limit = null): LengthAwarePaginator
    {
        return Project::active()->orderBy('created_at', 'desc')->paginate($limit);
    }

    public function active($limit = null): Collection
    {
        return Project::active()->orderBy('created_at', 'desc')->limit($limit)->get();
    }

    public function find(int $id): ?Project
    {
        return Project::find($id);
    }

    public function create(array $data): Project
    {
        return Project::create($data);
    }

    public function update(Project $project, array $data): bool
    {
        return $project->update($data);
    }

    public function delete(Project $project): bool
    {
        return $project->delete();
    }
}

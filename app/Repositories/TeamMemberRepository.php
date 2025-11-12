<?php

namespace App\Repositories;

use App\Models\TeamMember;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class TeamMemberRepository
{
    public function __construct(
        protected TeamMember $model
    ) {}

    public function all(): Collection
    {
        return $this->model
            ->orderBy('sort')
            ->orderByDesc('created_at')
            ->get();
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

    public function activePaginate($limit = 15): LengthAwarePaginator
    {
        return $this->model
            ->newQuery()
            ->active()
            ->orderBy('sort')
            ->orderByDesc('created_at')
            ->paginate($limit);
    }

    public function find(int $id): ?TeamMember
    {
        return $this->model->find($id);
    }

    public function create(array $data): TeamMember
    {
        return $this->model->create($data);
    }

    public function update(TeamMember $teamMember, array $data): bool
    {
        return $teamMember->update($data);
    }

    public function delete(TeamMember $teamMember): bool
    {
        return $teamMember->delete();
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

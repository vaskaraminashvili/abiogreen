<?php

namespace App\Repositories;

use App\Models\Stats;
use Illuminate\Database\Eloquent\Collection;

class StatsRepository
{
    public function __construct(
        protected Stats $model
    ) {}

    public function all(): Collection
    {
        return $this->model->orderBy('sort')->get();
    }

    public function active(): Collection
    {
        return $this->model->where('status', true)->orderBy('sort')->get();
    }

    public function find(int $id): ?Stats
    {
        return $this->model->find($id);
    }

    public function create(array $data): Stats
    {
        return $this->model->create($data);
    }

    public function update(Stats $stats, array $data): bool
    {
        return $stats->update($data);
    }

    public function delete(Stats $stats): bool
    {
        return $stats->delete();
    }

    public function getNextSortOrder(): int
    {
        return $this->model->max('sort') + 1;
    }

    public function reorder(array $sortedIds): void
    {
        foreach ($sortedIds as $index => $id) {
            $this->model->where('id', $id)->update(['sort' => $index + 1]);
        }
    }
}

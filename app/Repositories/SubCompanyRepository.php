<?php

namespace App\Repositories;

use App\Models\SubCompany;
use Illuminate\Database\Eloquent\Collection;

class SubCompanyRepository
{
    public function __construct(
        protected SubCompany $model
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

    public function find(int $id): ?SubCompany
    {
        return $this->model->find($id);
    }

    public function create(array $data): SubCompany
    {
        return $this->model->create($data);
    }

    public function update(SubCompany $subCompany, array $data): bool
    {
        return $subCompany->update($data);
    }

    public function delete(SubCompany $subCompany): bool
    {
        return $subCompany->delete();
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

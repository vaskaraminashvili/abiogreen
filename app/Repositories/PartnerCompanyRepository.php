<?php

namespace App\Repositories;

use App\Models\PartnerCompany;
use Illuminate\Database\Eloquent\Collection;

class PartnerCompanyRepository
{
    public function __construct(
        protected PartnerCompany $model
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

    public function find(int $id): ?PartnerCompany
    {
        return $this->model->find($id);
    }

    public function create(array $data): PartnerCompany
    {
        return $this->model->create($data);
    }

    public function update(PartnerCompany $partnerCompany, array $data): bool
    {
        return $partnerCompany->update($data);
    }

    public function delete(PartnerCompany $partnerCompany): bool
    {
        return $partnerCompany->delete();
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

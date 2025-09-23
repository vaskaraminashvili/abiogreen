<?php

namespace App\Repositories;

use App\Models\SubCompany;
use Illuminate\Database\Eloquent\Collection;

class SubCompanyRepository
{
    public function all(): Collection
    {
        return SubCompany::orderBy('created_at', 'desc')->get();
    }

    public function active(): Collection
    {
        return SubCompany::active()->orderBy('created_at', 'desc')->get();
    }

    public function find(int $id): ?SubCompany
    {
        return SubCompany::find($id);
    }

    public function create(array $data): SubCompany
    {
        return SubCompany::create($data);
    }

    public function update(SubCompany $subCompany, array $data): bool
    {
        return $subCompany->update($data);
    }

    public function delete(SubCompany $subCompany): bool
    {
        return $subCompany->delete();
    }
}

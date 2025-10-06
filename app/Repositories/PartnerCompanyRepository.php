<?php

namespace App\Repositories;

use App\Models\PartnerCompany;
use Illuminate\Database\Eloquent\Collection;

class PartnerCompanyRepository
{
    public function all(): Collection
    {
        return PartnerCompany::orderBy('created_at', 'desc')->get();
    }

    public function active($limit = null): Collection
    {
        return PartnerCompany::active()->orderBy('created_at', 'desc')->limit($limit)->get();
    }

    public function find(int $id): ?PartnerCompany
    {
        return PartnerCompany::find($id);
    }

    public function create(array $data): PartnerCompany
    {
        return PartnerCompany::create($data);
    }

    public function update(PartnerCompany $partnerCompany, array $data): bool
    {
        return $partnerCompany->update($data);
    }

    public function delete(PartnerCompany $partnerCompany): bool
    {
        return $partnerCompany->delete();
    }
}

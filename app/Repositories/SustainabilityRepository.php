<?php

namespace App\Repositories;

use App\Models\Sustainability;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class SustainabilityRepository
{
    public function all(): Collection
    {
        return Sustainability::orderBy('created_at', 'desc')->get();
    }

    public function active(int $limit = 15): Collection
    {
        return Sustainability::where('status', true)->latest()->limit($limit)->get();
    }

    public function paginate(int $perPage = 15): LengthAwarePaginator
    {
        return Sustainability::orderBy('created_at', 'desc')->paginate($perPage);
    }

    public function find(int $id): ?Sustainability
    {
        return Sustainability::find($id);
    }

    public function create(array $data): Sustainability
    {
        return Sustainability::create($data);
    }

    public function update(Sustainability $record, array $data): bool
    {
        return $record->update($data);
    }

    public function delete(Sustainability $record): bool
    {
        return $record->delete();
    }
}

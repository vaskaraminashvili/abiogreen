<?php

namespace App\Repositories;

use App\Models\Investors;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class InvestorsRepository
{
    public function all(): Collection
    {
        return Investors::orderBy('created_at', 'desc')->get();
    }

    public function active(int $limit = 15): Collection
    {
        return Investors::where('status', true)->latest()->limit($limit)->get();
    }

    public function paginate(int $perPage = 15): LengthAwarePaginator
    {
        return Investors::orderBy('created_at', 'desc')->paginate($perPage);
    }

    public function find(int $id): ?Investors
    {
        return Investors::find($id);
    }

    public function create(array $data): Investors
    {
        return Investors::create($data);
    }

    public function update(Investors $record, array $data): bool
    {
        return $record->update($data);
    }

    public function delete(Investors $record): bool
    {
        return $record->delete();
    }
}

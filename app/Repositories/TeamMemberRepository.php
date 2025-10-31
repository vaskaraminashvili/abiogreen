<?php

namespace App\Repositories;

use App\Models\TeamMember;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class TeamMemberRepository
{
    public function all(): Collection
    {
        return TeamMember::orderBy('created_at', 'desc')->get();
    }

    public function active($limit = null): Collection
    {
        return TeamMember::active()->orderBy('created_at', 'desc')->limit($limit)->get();
    }
    public function activePaginate($limit = 15): LengthAwarePaginator
    {
        return TeamMember::active()->orderBy('id', 'asc')->paginate($limit);
    }

    public function find(int $id): ?TeamMember
    {
        return TeamMember::find($id);
    }

    public function create(array $data): TeamMember
    {
        return TeamMember::create($data);
    }

    public function update(TeamMember $teamMember, array $data): bool
    {
        return $teamMember->update($data);
    }

    public function delete(TeamMember $teamMember): bool
    {
        return $teamMember->delete();
    }
}

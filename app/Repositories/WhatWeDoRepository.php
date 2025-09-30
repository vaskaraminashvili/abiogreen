<?php

namespace App\Repositories;

use App\Models\WhatWeDo;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class WhatWeDoRepository
{
    public function all(): Collection
    {
        return WhatWeDo::orderBy('created_at', 'desc')->get();
    }

    public function active(int $limit = 15): Collection
    {
        return WhatWeDo::where('status', true)->latest()->limit($limit)->get();
    }

    public function paginate(int $perPage = 15): LengthAwarePaginator
    {
        return WhatWeDo::orderBy('created_at', 'desc')->paginate($perPage);
    }

    public function find(int $id): ?WhatWeDo
    {
        return WhatWeDo::find($id);
    }

    public function create(array $data): WhatWeDo
    {
        return WhatWeDo::create($data);
    }

    public function update(WhatWeDo $record, array $data): bool
    {
        return $record->update($data);
    }

    public function delete(WhatWeDo $record): bool
    {
        return $record->delete();
    }
}

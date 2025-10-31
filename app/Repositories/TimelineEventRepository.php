<?php

namespace App\Repositories;

use App\Models\TimelineEvent;
use Illuminate\Database\Eloquent\Collection;

class TimelineEventRepository
{
    public function all(): Collection
    {
        return TimelineEvent::orderBy('order')->orderBy('event_date')->get();
    }

    public function active(): Collection
    {
        return TimelineEvent::where('is_active', true)
            ->orderBy('event_date')
            ->get();
    }

    public function find(int $id): ?TimelineEvent
    {
        return TimelineEvent::find($id);
    }

    public function create(array $data): TimelineEvent
    {
        return TimelineEvent::create($data);
    }

    public function update(TimelineEvent $timelineEvent, array $data): bool
    {
        return $timelineEvent->update($data);
    }

    public function delete(TimelineEvent $timelineEvent): bool
    {
        return $timelineEvent->delete();
    }
}

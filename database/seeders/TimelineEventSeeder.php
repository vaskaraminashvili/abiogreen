<?php

namespace Database\Seeders;

use App\Models\TimelineEvent;
use Illuminate\Database\Seeder;

class TimelineEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            [
                'title' => 'Company Foundation',
                'event_date' => '2015-01-01',
                'description' => 'Abiogreen was established with a vision to provide sustainable energy solutions and contribute to environmental conservation.',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'First Solar Project',
                'event_date' => '2016-06-15',
                'description' => 'Successfully completed our first large-scale solar energy project, marking a significant milestone in renewable energy implementation.',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Wind Energy Division Launch',
                'event_date' => '2017-09-01',
                'description' => 'Expanded operations to include wind energy solutions, diversifying our renewable energy portfolio.',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'International Partnership',
                'event_date' => '2018-12-10',
                'description' => 'Formed strategic partnerships with international organizations to promote green energy initiatives across borders.',
                'order' => 4,
                'is_active' => true,
            ],
            [
                'title' => 'Innovation Award',
                'event_date' => '2020-03-20',
                'description' => 'Received recognition for innovative approaches in sustainable energy solutions and environmental technology.',
                'order' => 5,
                'is_active' => true,
            ],
            [
                'title' => 'Expansion Milestone',
                'event_date' => '2022-07-01',
                'description' => 'Reached 100+ completed projects, demonstrating our commitment to sustainable development and clean energy.',
                'order' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($events as $event) {
            TimelineEvent::create($event);
        }
    }
}

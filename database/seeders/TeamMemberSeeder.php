<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Seeder;

class TeamMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teamMembers = [
            [
                'name' => [
                    'en' => 'John',
                    'ka' => 'იოანე',
                ],
                'surname' => [
                    'en' => 'Smith',
                    'ka' => 'სმითი',
                ],
                'position' => [
                    'en' => 'Chief Executive Officer',
                    'ka' => 'აღმასრულებელი დირექტორი',
                ],
                'description' => [
                    'en' => 'John has over 15 years of experience in renewable energy sector and leads our company with vision and dedication.',
                    'ka' => 'იოანეს აქვს 15 წელზე მეტი გამოცდილება განახლებადი ენერგიის სექტორში და ხელმძღვანელობს ჩვენს კომპანიას ხედვითა და ერთგულებით.',
                ],
                'profile_data' => [
                    'Location' => 'Tbilisi, Georgia',
                    'Experience' => '15 years',
                    'Education' => 'MBA in Business Administration',
                    'Email' => 'john.smith@abiogreen.ge',
                    'Phone' => '+995 555 123 456',
                ],
                'status' => true,
            ],
            [
                'name' => [
                    'en' => 'Sarah',
                    'ka' => 'სარა',
                ],
                'surname' => [
                    'en' => 'Johnson',
                    'ka' => 'ჯონსონი',
                ],
                'position' => [
                    'en' => 'Technical Director',
                    'ka' => 'ტექნიკური დირექტორი',
                ],
                'description' => [
                    'en' => 'Sarah is responsible for all technical aspects of our renewable energy projects and ensures highest quality standards.',
                    'ka' => 'სარა პასუხისმგებელია ჩვენი განახლებადი ენერგიის პროექტების ყველა ტექნიკურ ასპექტზე და უზრუნველყოფს უმაღლეს ხარისხოვან სტანდარტებს.',
                ],
                'profile_data' => [
                    'Location' => 'Batumi, Georgia',
                    'Experience' => '12 years',
                    'Education' => 'PhD in Electrical Engineering',
                    'Email' => 'sarah.johnson@abiogreen.ge',
                    'Phone' => '+995 555 789 012',
                ],
                'status' => true,
            ],
            [
                'name' => [
                    'en' => 'Michael',
                    'ka' => 'მიხაილი',
                ],
                'surname' => [
                    'en' => 'Brown',
                    'ka' => 'ბრაუნი',
                ],
                'position' => [
                    'en' => 'Project Manager',
                    'ka' => 'პროექტის მენეჯერი',
                ],
                'description' => [
                    'en' => 'Michael coordinates our renewable energy projects from planning to implementation, ensuring timely delivery.',
                    'ka' => 'მიხაილი კოორდინაციას უწევს ჩვენი განახლებადი ენერგიის პროექტებს დაგეგმვიდან განხორციელებამდე, უზრუნველყოფს დროულ მიწოდებას.',
                ],
                'profile_data' => [
                    'Location' => 'Kutaisi, Georgia',
                    'Experience' => '8 years',
                    'Education' => 'Master in Project Management',
                    'Email' => 'michael.brown@abiogreen.ge',
                    'Phone' => '+995 555 345 678',
                ],
                'status' => true,
            ],
        ];

        foreach ($teamMembers as $memberData) {
            TeamMember::create($memberData);
        }
    }
}

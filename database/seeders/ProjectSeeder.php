<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => [
                    'en' => 'Tbilisi Solar Power Plant',
                    'ka' => 'თბილისის მზის ელექტროსადგური',
                ],
                'description' => [
                    'en' => 'A state-of-the-art solar power plant located in Tbilisi, capable of generating clean energy for thousands of households. This project incorporates the latest photovoltaic technology and energy storage systems to ensure reliable power supply even during peak demand periods.',
                    'ka' => 'ულამაზესი მზის ელექტროსადგური თბილისში, რომელსაც შეუძლია ათასობით შინამეურნეობისთვის სუფთა ენერგიის წარმოება. ეს პროექტი აერთიანებს ფოტოვოლტაური ტექნოლოგიის უახლეს მიღწევებს და ენერგიის შენახვის სისტემებს, რათა უზრუნველყოს ელექტროენერგიის საიმედო მიწოდება მაქსიმალური მოთხოვნის პერიოდებშიც კი.',
                ],
                'station_size' => '100MW',
                'status' => true,
            ],
            [
                'title' => [
                    'en' => 'Samtskhe Wind Energy Project',
                    'ka' => 'სამცხე-ჯავახეთის ქარის ენერგიის პროექტი',
                ],
                'description' => [
                    'en' => 'An innovative wind energy project in the Samtskhe region, utilizing high-efficiency wind turbines to harness the region\'s natural wind resources. The project features advanced monitoring systems and grid integration technology to maximize energy output and ensure stable power delivery.',
                    'ka' => 'ინოვაციური ქარის ენერგიის პროექტი სამცხე-ჯავახეთის რეგიონში, რომელიც იყენებს მაღალეფექტურ ქარის ტურბინებს რეგიონის ბუნებრივი ქარის რესურსების გამოსაყენებლად. პროექტი მოიცავს მონიტორინგის მოწინავე სისტემებს და ქსელთან ინტეგრაციის ტექნოლოგიას ენერგიის გამოშვების მაქსიმიზაციისა და ელექტროენერგიის სტაბილური მიწოდების უზრუნველსაყოფად.',
                ],
                'station_size' => '150MW',
                'status' => true,
            ],
            [
                'title' => [
                    'en' => 'Kura River Hydroelectric Station',
                    'ka' => 'მტკვრის ჰიდროელექტროსადგური',
                ],
                'description' => [
                    'en' => 'A modern hydroelectric facility on the Kura River, designed to generate sustainable energy while maintaining environmental balance. The project includes fish ladders and environmental protection measures to preserve the local ecosystem while providing clean energy to the national grid.',
                    'ka' => 'თანამედროვე ჰიდროელექტროობიექტი მტკვარზე, რომელიც შექმნილია მდგრადი ენერგიის წარმოებისთვის გარემოსდაცვითი ბალანსის შენარჩუნებით. პროექტი მოიცავს თევზების გადასასვლელებსა და გარემოს დაცვის ღონისძიებებს ადგილობრივი ეკოსისტემის შესანარჩუნებლად, ამავდროულად მთელი ქვეყნისთვის სუფთა ენერგიის უზრუნველყოფისთვის.',
                ],
                'station_size' => '50MW',
                'status' => false,
            ],
            [
                'title' => [
                    'en' => 'Adjara Geothermal Energy Plant',
                    'ka' => 'აჭარის გეოთერმული ენერგიის ქარხანა',
                ],
                'description' => [
                    'en' => 'A cutting-edge geothermal energy facility in Adjara region, tapping into the area\'s natural thermal resources. This project utilizes advanced geothermal drilling technology and closed-loop systems to generate clean, renewable energy with minimal environmental impact.',
                    'ka' => 'უახლესი გეოთერმული ენერგიის ობიექტი აჭარის რეგიონში, რომელიც იყენებს რაიონის ბუნებრივ თერმულ რესურსებს. ეს პროექტი იყენებს გეოთერმული ბურღვის მოწინავე ტექნოლოგიასა და დახურული ციკლის სისტემებს სუფთა, განახლებადი ენერგიის წარმოებისთვის მინიმალური გარემოზე ზემოქმედებით.',
                ],
                'station_size' => '25MW',
                'status' => true,
            ],
        ];

        foreach ($projects as $projectData) {
            Project::create($projectData);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\PartnerCompany;
use Illuminate\Database\Seeder;

class PartnerCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $partnerCompanies = [
            [
                'title' => [
                    'en' => 'Green Energy Partners',
                    'ka' => 'მწვანე ენერგიის პარტნიორები',
                ],
                'status' => true,
            ],
            [
                'title' => [
                    'en' => 'Solar Solutions Ltd',
                    'ka' => 'მზის გადაწყვეტილებები',
                ],
                'status' => true,
            ],
            [
                'title' => [
                    'en' => 'Wind Power Corp',
                    'ka' => 'ქარის ენერგია',
                ],
                'status' => true,
            ],
            [
                'title' => [
                    'en' => 'EcoTech Industries',
                    'ka' => 'ეკო-ტექ ინდუსტრიები',
                ],
                'status' => true,
            ],
        ];

        foreach ($partnerCompanies as $partnerData) {
            PartnerCompany::create($partnerData);
        }
    }
}

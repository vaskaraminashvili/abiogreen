<?php

namespace Database\Seeders;

use App\Models\SubCompany;
use Illuminate\Database\Seeder;

class SubCompanySeeder extends Seeder
{
    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        $subCompanies = [
            [
                'title' => [
                    'en' => 'Green Energy Solutions',
                    'ka' => 'მწვანე ენერგიის გადაწყვეტილებები',
                ],
                'short_desc' => [
                    'en' => 'Innovative renewable energy solutions for sustainable future',
                    'ka' => 'ინოვაციური განახლებადი ენერგიის გადაწყვეტილებები მდგრადი მომავლისთვის',
                ],
                'description' => [
                    'en' => 'Our subsidiary focuses on developing cutting-edge renewable energy technologies including solar panels, wind turbines, and energy storage systems. We are committed to reducing carbon footprint and promoting sustainable energy practices across all sectors.',
                    'ka' => 'ჩვენი შვილობილი კომპანია ფოკუსირებულია განახლებადი ენერგიის უახლესი ტექნოლოგიების განვითარებაზე, მათ შორის მზის პანელები, ქარის ტურბინები და ენერგიის შენახვის სისტემები. ჩვენ ვართ მიძღვნილი ნახშირბადის ნაკვალევის შემცირებისა და მდგრადი ენერგიის პრაქტიკის ხელშეწყობისთვის ყველა სექტორში.',
                ],
                'status' => true,
            ],
            [
                'title' => [
                    'en' => 'Eco Consulting Group',
                    'ka' => 'ეკო კონსალტინგ ჯგუფი',
                ],
                'short_desc' => [
                    'en' => 'Environmental consulting and sustainability advisory services',
                    'ka' => 'გარემოს კონსალტინგი და მდგრადობის საკონსულტაციო სერვისები',
                ],
                'description' => [
                    'en' => 'We provide comprehensive environmental consulting services to businesses and organizations looking to implement sustainable practices. Our expert team offers guidance on environmental impact assessments, green certifications, and compliance with environmental regulations.',
                    'ka' => 'ჩვენ ვთავაზობთ ყოვლისმომცველ გარემოსდაცვით საკონსულტაციო სერვისებს ბიზნესებისა და ორგანიზაციებისთვის, რომლებიც სურთ მდგრადი პრაქტიკის დანერგვა. ჩვენი ექსპერტი გუნდი გთავაზობთ მეთოდურ ცნობებს გარემოზე ზემოქმედების შეფასების, მწვანე სერტიფიკაციისა და გარემოსდაცვითი რეგულაციების დაცვის შესახებ.',
                ],
                'status' => true,
            ],
            [
                'title' => [
                    'en' => 'Waste Management Technologies',
                    'ka' => 'ნარჩენების მართვის ტექნოლოგიები',
                ],
                'short_desc' => [
                    'en' => 'Advanced waste processing and recycling solutions',
                    'ka' => 'ნარჩენების დამუშავებისა და გადამუშავების მოწინავე გადაწყვეტილებები',
                ],
                'description' => [
                    'en' => 'Our waste management division develops innovative technologies for waste processing, recycling, and circular economy solutions. We focus on reducing waste generation and maximizing resource recovery through advanced sorting and processing systems.',
                    'ka' => 'ჩვენი ნარჩენების მართვის განყოფილება ავითარებს ინოვაციურ ტექნოლოგიებს ნარჩენების დამუშავების, რეციკლირებისა და წრიული ეკონომიკის გადაწყვეტილებებისთვის. ჩვენ ვფოკუსირდებით ნარჩენების წარმოების შემცირებასა და რესურსების აღდგენის მაქსიმიზაციაზე მოწინავე დალაგებისა და დამუშავების სისტემების მეშვეობით.',
                ],
                'status' => false,
            ],
        ];

        foreach ($subCompanies as $subCompanyData) {
            SubCompany::create($subCompanyData);
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Models\Section;

class SectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sections = [
            [
                'title' => 'SELF ASSESSMENT OF HEALTH',
                'description' => '',
                'color_code' => ''
            ],
            [
                'title' => 'NUTRITIONAL ASSESSMENT',
                'description' => '',
                'color_code' => ''
            ],
            [
                'title' => 'LIFESTYLE ASSESSMENT',
                'description' => '',
                'color_code' => ''
            ],
            [
                'title' => 'GYNAECOLOGICAL HISTORY ASSESSMENT',
                'description' => '',
                'color_code' => ''
            ],
            [
                'title' => 'OBSTETRICS HISTORY ASSESSMENT',
                'description' => '',
                'color_code' => ''
            ],
            [
                'title' => 'MENOPAUSE ASSESSMENT',
                'description' => '',
                'color_code' => ''
            ],
            [
                'title' => 'MEDICAL HISTORY ASSESSMENT',
                'description' => '',
                'color_code' => ''
            ],
            [
                'title' => 'SLEEP ASSESSMENT',
                'description' => '',
                'color_code' => ''
            ],
            [
                'title' => 'PHYSICAL ACTIVITY ASSESSMENT',
                'description' => '',
                'color_code' => ''
            ],
            [
                'title' => 'EMOTIONAL WELLBEING ASSESSMENT',
                'description' => '',
                'color_code' => ''
            ],
            [
                'title' => 'SEXUAL HISTORY ASSESSMENT',
                'description' => '',
                'color_code' => ''
            ],
            [
                'title' => 'PHYSICAL FEATURES ASSESSMENT',
                'description' => '',
                'color_code' => ''
            ],
            [
                'title' => 'PERSONAL',
                'description' => '',
                'color_code' => ''
            ],

        ];

        foreach ($sections as $section) {
            try {
                $found = Section::where([
                    'slug' => str_slug($section['title'])
                ])->first();

                if (!is_null($found)) continue;
                
                Section::create([
                    'title'       => $section['title'],
                    'description' => $section['description'],
                    'slug'        => str_slug($section['title']),
                    'color_code'  => $section['color_code']
                ]);

            } catch (PDOException $e) {
                dd($e->getMessage());
            }
        }
    }
}

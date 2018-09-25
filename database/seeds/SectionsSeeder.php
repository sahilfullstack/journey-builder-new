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
                'title' => 'NUTRITION',
                'description' => '',
                'color_code' => ''
            ],
            [
                'title' => 'LIFESTYLE',
                'description' => '',
                'color_code' => ''
            ],
            [
                'title' => 'SLEEP',
                'description' => '',
                'color_code' => ''
            ],
            [
                'title' => 'PHYSICAL ACTIVITY',
                'description' => '',
                'color_code' => ''
            ],
            [
                'title' => 'PHYSICAL FEATURES',
                'description' => '',
                'color_code' => ''
            ],
            [
                'title' => 'EMOTIONAL WELLBEING',
                'description' => '',
                'color_code' => ''
            ],
            [
                'title' => 'GYNAECOLOGICAL HISTORY',
                'description' => '',
                'color_code' => ''
            ],
            [
                'title' => 'MEDICAL HISTORY',
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

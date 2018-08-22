<?php

use Illuminate\Database\Seeder;
use App\Models\Tree;

class TreesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trees = [
            [
                'name' => 'General Assessment',
                'description' => 'The tree for General Assessment',
                'slug'  => 'ga'
            ]
        ];

        foreach ($trees as $tree) {
            try {
                $found = Tree::where([
                    'slug' => str_slug($tree['slug']),
                    'deleted_at_millis' => 0
                ])->first();

                if (!is_null($found)) continue;
                
                Tree::create([
                    'name' => $tree['name'],
                    'description' => $tree['description'],
                    'slug' => $tree['slug']
                ]);
            } catch (PDOException $e) {
                
            }
        }
    }
}

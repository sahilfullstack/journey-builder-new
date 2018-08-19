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
            'General Assessment' => 'The tree for General Assessment',
            'Acne' => 'The tree for acne',
        ];

        foreach ($trees as $tree => $description) {
            try {
                $found = Tree::where([
                    'slug' => str_slug($tree),
                    'deleted_at_millis' => 0
                ])->first();

                if (!is_null($found)) continue;
                
                Tree::create([
                    'name' => $tree,
                    'description' => $description,
                    'slug' => str_slug($tree)
                ]);
            } catch (PDOException $e) {
                
            }
        }
    }
}

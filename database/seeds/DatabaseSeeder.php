<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TreesSeeder::class);
        $this->call(GANodesSeeder::class);
        // $this->call(NodesSeeder::class);
    }
}

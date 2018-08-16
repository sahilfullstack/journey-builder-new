<?php

use Illuminate\Database\Seeder;
use App\Models\Tree;
use App\Models\Node;

class GANodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 		$trees = [
            str_slug('General Assessment') => Tree::notDeleted()->whereSlug(str_slug('General Assessment'))->first()->id,
        ];

        foreach ($nodes as $node) {
            try {

                $found = Node::notDeleted()->whereTreeId($node['tree_id'])->whereOrder($node['order'])->first();

                if ( ! is_null($found)) continue;

                var_dump("seeding node with order". $node['order']. " and tree id ". $node['tree_id']);

                $t = Node::create([
					'order'     => $node['order'],
					'tree_id'   => $node['tree_id'],
					'data'      => $node['data'],
					'type'      => $node['type'],
					'options'   => $node['options'],
					'decisions' => $node['decisions'],
                ]);

            } catch (PDOException $e) {
              	dd($e);  
            }
        }


    }
}
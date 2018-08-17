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

        $nodes = [
          [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 1,
              'data' => [
                'title' => 'What is your opinion about your health?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'order' => 0,
                    'data' => [
                        'text' => 'Almost always healthy',
                    ],
                    'to' => 2,
                    'operations' => []                   
                  ],
                  [
                    'order' => 1,
                    'data' => [
                        'text' => 'Usually healthy, falls sick occasionally',
                    ],
                    'to' => 2,
                    'operations' => []                   
                  ],
                  [
                    'order' => 2,
                    'data' => [
                        'text' => 'Falls sick frequently',
                    ],
                    'to' => 2,
                    'operations' => []                   
                  ],
                  [
                    'order' => 3,
                    'data' => [
                        'text' => 'Chronically ill',
                    ],
                    'to' => 2,
                    'operations' => []                   
                  ],
                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 2,
              'data' => [
                'title' => 'How often do you smoke?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'order' => 0,
                    'data' => [
                        'text' => 'Never',
                    ],
                    'to' => 3,
                    'operations' => []                   
                  ],
                  [
                    'order' => 1,
                    'data' => [
                        'text' => 'Everyday',
                    ],
                    'to' => 3,
                    'operations' => []                   
                  ],
                  [
                    'order' => 2,
                    'data' => [
                        'text' => 'Social',
                    ],
                    'to' => 3,
                    'operations' => []                   
                  ],
                  [
                    'order' => 3,
                    'data' => [
                        'text' => 'Quit',
                    ],
                    'to' => 3,
                    'operations' => []                   
                  ],
                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 3,
              'data' => [
                'title' => 'Which of the following symptoms describe your digestive power?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_multiple',
                'minimum' => 1,
                'maximum' => 9,
                'to' => 4,
                'selectables' => [
                  [
                                        'order' => 0,
                    'data' => [
                        'text' => 'Acidity',
                    ],
                    'to' => 4,
                    'operations' => []                   
                  ],
                  [
                                      'order' => 1,
                    'data' => [
                        'text' => 'Acidity',
                    ],
                    'to' => 4,
                    'operations' => []                   
                  ],           
                  [
                    'order' => 2,
                    'data' => [
                        'text' => 'Acidity',
                    ],
                    'to' => 4,
                    'operations' => []                   
                  ],
                  [
                    'order' => 3,
                    'data' => [
                        'text' => 'Acidity',
                    ],
                    'to' => 4,
                    'operations' => []                   
                  ], 
                  [
                    'order' => 4,
                    'data' => [
                        'text' => 'Acidity',
                    ],
                    'to' => 4,
                    'operations' => []                   
                  ],
                  [
                    'order' => 5,
                    'data' => [
                        'text' => 'Acidity',
                    ],
                    'to' => 4,
                    'operations' => []                   
                  ], 
                  [
                    'order' => 6,
                    'data' => [
                        'text' => 'Acidity',
                    ],
                    'to' => 4,
                    'operations' => []                   
                  ],
                  [
                    'order' => 7,
                    'data' => [
                        'text' => 'Acidity',
                    ],
                    'to' => 4,
                    'operations' => []                   
                  ],   
                  [
                                      'order' => 8,
                    'data' => [
                        'text' => 'Acidity',
                    ],
                    'to' => 4,
                    'operations' => []                   
                  ],                 
                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 5,
              'data' => [
                'title' => 'Number of vaginal deliveries',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'number',
                'to' => 5              
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 5,
              'data' => [
                'title' => 'Number of Caesarian deliverie',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'number',
                'to' => 6             
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 6,
              'data' => [
                'title' => 'Number of abortions',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'number',
                'to' => 7             
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 7,
              'data' => [
                'title' => 'Do you have any medical conditions currently? * Do not include medical conditions that were cured and you are no longer taking treatment for them.',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'text',
                'to' => 8             
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 8,
              'data' => [
                'title' => 'Specify history of any medical illness?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'text',
                'to' => 9             
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 9,
              'data' => [
                'title' => 'Specify form of physical activity you engage in ?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'text',
                'to' => 10             
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 10,
              'data' => [
                'title' => 'Specify incident/ grief/ stress/ that has had an impact on your overall emotional state?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'text',
                'to' => null           
              ]
            ],
        ];

        foreach ($nodes as $node) 
        {
            try 
            {
                $found = Node::notDeleted()->whereTreeId($node['tree_id'])->whereIdentifier($node['identifier'])->first();

                if ( ! is_null($found)) continue;

                var_dump("seeding node with Identifier". $node['identifier']. " and tree id ". $node['tree_id']);

                $t = Node::create([
                  'identifier' => $node['identifier'],
                  'tree_id'    => $node['tree_id'],
                  'data'       => $node['data'],
                  'linker'     => $node['linker'],
                ]);
            } 
            catch(PDOException $e) 
            {
              	dd($e);  
            }
        }
    }
}


/* 

Architecture of a node

let node = {
    data: {
        title: 'Question',
        body: 'This is the detailed question'
    },

    linker: {
        type: 'select_one', // logic, select_one, select_many, text, date, number, upload, camera
        minimum: 1, // present when select_many
        maximum: 1, // present when select_many
        to: 123, // present when select_many, text, number, upload, camera
        operations: [], // present when select_many, text, number, upload, camera
        logic: [{ // present when logic
            when: {
                skin_score: {
                    $gte: 30
                }
            },
            to: 234, // Node ID
            operations: []
        }],
        selectables: [{ // present when select_one, select_many
            data: {
                image_url: 'https://example.com/image.png',
                text: 'Some text',
            },
            to: 123, // Decider ID or Node ID (present when select_one)
            operations: [{
                skin_score: {
                    $add: 2
                }
            }]
        },
        {
            data: {
                text: 'Others (Please specify)',
                followup_prompt: 'Please tell what do you feel at night?'
            },
            to: 234,
            operations: [{
                cause: {
                    $set: 'Lack of sleep'
                }
            }]
        }]
    }
}

 */
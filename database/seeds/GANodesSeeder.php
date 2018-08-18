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
                    'data' => [
                        'text' => 'Almost always healthy',
                    ],
                    'to' => 2,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Usually healthy, falls sick occasionally',
                    ],
                    'to' => 2,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Falls sick frequently',
                    ],
                    'to' => 2,
                    'operations' => []                   
                  ],
                  [
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
                    'data' => [
                        'text' => 'Never',
                    ],
                    'to' => 3,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Everyday',
                    ],
                    'to' => 3,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Social',
                    ],
                    'to' => 3,
                    'operations' => []                   
                  ],
                  [
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
                'title' => 'How often do you consume alcohol?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Never',
                    ],
                    'to' => 4,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Everyday',
                    ],
                    'to' => 4,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Social',
                    ],
                    'to' => 4,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Quit',
                    ],
                    'to' => 4,
                    'operations' => []                   
                  ],
                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 4,
              'data' => [
                'title' => 'Which of the following food items you consume in your diet?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_multiple',
                'minimum' => 1,
                'maximum' => 6,
                'to' => 5,
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Vegetables',
                    ],
                    'to' => 5,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Fruits',
                    ],
                    'to' => 5,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'Meat',
                    ],
                    'to' => 5,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Egg',
                    ],
                    'to' => 5,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Dairy Products',
                    ],
                    'to' => 5,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Fish',
                    ],
                    'to' => 5,
                    'operations' => []                   
                  ], 
                                   
                ]                  
              ]
            ],


            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 5,
              'data' => [
                'title' => 'If Non – vegetarian, how many times a week do you eat?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Everyday',
                    ],
                    'to' => 6,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => '1-2 times a week',
                    ],
                    'to' => 6,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => '3-4 times a week',
                    ],
                    'to' => 6,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Once a week',
                    ],
                    'to' => 6,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Once a month',
                    ],
                    'to' => 6,
                    'operations' => []                   
                  ],
                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 6,
              'data' => [
                'title' => 'How is your appetite?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Balanced',
                    ],
                    'to' => 7,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Erratic',
                    ],
                    'to' => 7,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Poor',
                    ],
                    'to' => 7,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Small',
                    ],
                    'to' => 7,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Voracious',
                    ],
                    'to' => 7,
                    'operations' => []                   
                  ],
                ]                  
              ]
            ],

            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 7,
              'data' => [
                'title' => 'Which of the following symptoms describe your digestive power?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_multiple',
                'minimum' => 1,
                'maximum' => 9,
                'to' => 8,
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Acidity',
                    ],
                    'to' => 8,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Bloating',
                    ],
                    'to' => 8,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'Delicate',
                    ],
                    'to' => 8,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Eructation',
                    ],
                    'to' => 8,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Flatulence',
                    ],
                    'to' => 8,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Gas formation',
                    ],
                    'to' => 8,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Poor',
                    ],
                    'to' => 8,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Quick',
                    ],
                    'to' => 8,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Slow',
                    ],
                    'to' => 8,
                    'operations' => []                   
                  ],                 
                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 8,
              'data' => [
                'title' => 'How often do you eat out?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Never',
                    ],
                    'to' => 9,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => '1- 2 times a week',
                    ],
                    'to' => 9,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => '3 -4 times a week',
                    ],
                    'to' => 9,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Almost daily',
                    ],
                    'to' => 9,
                    'operations' => []                   
                  ],
                  
                ]                  
              ]
            ],[
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 9,
              'data' => [
                'title' => 'Which of the following do you enjoy more?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Oily food',
                    ],
                    'to' => 10,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Salty',
                    ],
                    'to' => 10,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Sour',
                    ],
                    'to' => 10,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Spicy',
                    ],
                    'to' => 10,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Sugary items',
                    ],
                    'to' => 10,
                    'operations' => []                   
                  ],
                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 10,
              'data' => [
                'title' => 'How much of plain water do you drink per day?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => '4 or less glass',
                    ],
                    'to' => 11,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => '5-8 glass',
                    ],
                    'to' => 11,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'More than 8 glasses',
                    ],
                    'to' => 11,
                    'operations' => []                   
                  ],                
                ]                  
              ]
            ],

            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 11,
              'data' => [
                'title' => 'Which of the following you drink on a daily basis?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_multiple',
                'minimum' => 1,
                'maximum' => 8,
                'to' => 12,
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Aerated drinks',
                    ],
                    'to' => 12,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Coffee',
                    ],
                    'to' => 12,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'Energy Drinks',
                    ],
                    'to' => 12,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Fruit juice –Fresh',
                    ],
                    'to' => 12,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Fruit juice – Canned',
                    ],
                    'to' => 12,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Green Tea',
                    ],
                    'to' => 12,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Milk',
                    ],
                    'to' => 12,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Regular Tea',
                    ],
                    'to' => 12,
                    'operations' => []                   
                  ],   
                                   
                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 12,
              'data' => [
                'title' => 'Do you have any known food allergies?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'None',
                    ],
                    'to' => 13,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Egg',
                    ],
                    'to' => 13,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Fish',
                    ],
                    'to' => 13,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Milk',
                    ],
                    'to' => 13,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Nuts',
                    ],
                    'to' => 13,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Peanuts',
                    ],
                    'to' => 13,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Soy',
                    ],
                    'to' => 13,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Wheat',
                    ],
                    'to' => 13,
                    'operations' => []                   
                  ],
                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 13,
              'data' => [
                'title' => 'How are your bowel movements?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Regular, once a day',
                    ],
                    'to' => 14,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Loose motions generally',
                    ],
                    'to' => 14,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Skip a day',
                    ],
                    'to' => 14,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Unsatisfactory, but once a day',
                    ],
                    'to' => 14,
                    'operations' => []                   
                  ],     
                  [
                    'data' => [
                        'text' => 'Ineffectual, Frequent urge during the day',
                    ],
                    'to' => 14,
                    'operations' => []                   
                  ],                    
                ]                  
              ]
            ],
             [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 14,
              'data' => [
                'title' => 'Age at first period:',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'number',
                'to' => 15              
              ]
            ],

            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 15,
              'data' => [
                'title' => 'How is your menstrual cycle?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Regular',
                    ],
                    'to' => 16,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Irregular',
                    ],
                    'to' => 16,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Stopped',
                    ],
                    'to' => 16,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Absent',
                    ],
                    'to' => 16,
                    'operations' => []                   
                  ],              
                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 16,
              'data' => [
                'title' => 'How heavy is your menstrual flow usually?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_multiple',
                'minimum' => 1,
                'maximum' => 5,
                'to' => 17,
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Light',
                    ],
                    'to' => 17,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Moderate',
                    ],
                    'to' => 17,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'Heavy',
                    ],
                    'to' => 17,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'With clots',
                    ],
                    'to' => 17,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Without Clots',
                    ],
                    'to' => 17,
                    'operations' => []                   
                  ],                  
                ]                  
              ]
            ],

            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 17,
              'data' => [
                'title' => 'Do you experience any of the following symptoms before or during menses?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_multiple',
                'minimum' => 1,
                'maximum' => 17,
                'to' => 18,
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Back Pain',
                    ],
                    'to' => 18,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Bloating',
                    ],
                    'to' => 18,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'Breast Tenderness',
                    ],
                    'to' => 18,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Constipation',
                    ],
                    'to' => 18,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Cramps',
                    ],
                    'to' => 18,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Craving for sweets',
                    ],
                    'to' => 18,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Depression',
                    ],
                    'to' => 18,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Diarrhea',
                    ],
                    'to' => 18,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Fatigue',
                    ],
                    'to' => 18,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Headache',
                    ],
                    'to' => 18,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Increased appetite',
                    ],
                    'to' => 18,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Insomnia',
                    ],
                    'to' => 18,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Irritability',
                    ],
                    'to' => 18,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Memory weakness',
                    ],
                    'to' => 18,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Nausea',
                    ],
                    'to' => 18,
                    'operations' => []                   
                  ],    
                  [
                    'data' => [
                        'text' => 'Palpitation',
                    ],
                    'to' => 18,
                    'operations' => []                   
                  ],    
                  [
                    'data' => [
                        'text' => 'Vomiting',
                    ],
                    'to' => 18,
                    'operations' => []                   
                  ],   
                ]                  
              ]
            ],

            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 18,
              'data' => [
                'title' => 'Have you ever noticed any lumps or swelling in your breasts?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Yes',
                    ],
                    'to' => 19,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'No',
                    ],
                    'to' => 19,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Not sure',
                    ],
                    'to' => 19,
                    'operations' => []                   
                  ],  
                           
                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 19,
              'data' => [
                'title' => 'Do you have any white discharge complaint?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Yes',
                    ],
                    'to' => 20,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'No',
                    ],
                    'to' => 20,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Throughout the month',
                    ],
                    'to' => 20,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Before menses',
                    ],
                    'to' => 20,
                    'operations' => []                   
                  ],     
                  [
                    'data' => [
                        'text' => 'After menses',
                    ],
                    'to' => 20,
                    'operations' => []                   
                  ],            
                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 20,
              'data' => [
                'title' => 'Do you have any urinary complaints?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'None',
                    ],
                    'to' => 21,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Burning',
                    ],
                    'to' => 21,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Dysuria',
                    ],
                    'to' => 21,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Increased frequency',
                    ],
                    'to' => 21,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Incontinence',
                    ],
                    'to' => 21,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Involuntary',
                    ],
                    'to' => 21,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Offensive',
                    ],
                    'to' => 21,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Urgency',
                    ],
                    'to' => 21,
                    'operations' => []                   
                  ],           
                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 21,
              'data' => [
                'title' => 'Are you pregnant or suspect that you might be?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Yes',
                    ],
                    'to' => 22,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'No',
                    ],
                    'to' => 22,
                    'operations' => []                   
                  ],                            
                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 22,
              'data' => [
                'title' => 'Number of vaginal deliveries',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'number',
                'to' => 23              
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 23,
              'data' => [
                'title' => 'Number of Caesarian deliverie',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'number',
                'to' => 24             
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 24,
              'data' => [
                'title' => 'Number of abortions',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'number',
                'to' => 25             
              ]
            ],

            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 25,
              'data' => [
                'title' => 'If you are currently Peri / Pre/ Post-menopausal, do you experience any of the following symptoms?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Not Applicable',
                    ],
                    'to' => 26,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Change in libido',
                    ],
                    'to' => 26,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Excess Sweating',
                    ],
                    'to' => 26,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Fatigue',
                    ],
                    'to' => 26,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Hot flushes',
                    ],
                    'to' => 26,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Insomnia',
                    ],
                    'to' => 26,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Mood changeable',
                    ],
                    'to' => 26,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Vagina dryness',
                    ],
                    'to' => 26,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Weight gain',
                    ],
                    'to' => 26,
                    'operations' => []                   
                  ],               
                ]                  
              ]
            ],


            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 26,
              'data' => [
                'title' => 'Do you have any medical conditions currently? * Do not include medical conditions that were cured and you are no longer taking treatment for them.',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'text',
                'to' => 27             
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 27,
              'data' => [
                'title' => 'Do you have any Vitamin or mineral deficiency?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Yes',
                    ],
                    'to' => 28,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'No',
                    ],
                    'to' => 29,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Don’t know',
                    ],
                    'to' => 29,
                    'operations' => []                   
                  ],  
                             
                ]                  
              ]
            ],
            [   
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 28,
              'data' => [
                'title' => 'Specify your Vitamin or mineral deficiency?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'text',
                'to' => 29             
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 29,
              'data' => [
                'title' => 'Do you have any known allergies currently?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Chemical',
                    ],
                    'to' => 30,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Drug',
                    ],
                    'to' => 30,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Dust',
                    ],
                    'to' => 30,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Environmental',
                    ],
                    'to' => 30,
                    'operations' => []                   
                  ],    
                   [
                    'data' => [
                        'text' => 'Pollen',
                    ],
                    'to' => 30,
                    'operations' => []                   
                  ],   
                   [
                    'data' => [
                        'text' => 'No',
                    ],
                    'to' => 30,
                    'operations' => []                   
                  ],   
                   [
                    'data' => [
                        'text' => 'Don’t know',
                    ],
                    'to' => 30,
                    'operations' => []                   
                  ],   
                  
                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 30,
              'data' => [
                'title' => 'Do you have any history of medical illness?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Yes',
                    ],
                    'to' => 31,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'No',
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ],                 
                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 31,
              'data' => [
                'title' => 'Specify history of any medical illness?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'text',
                'to' => 32             
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 32,
              'data' => [
                'title' => 'Does any of your direct blood relatives* have or had any medical conditions?
*Direct Blood relative is anyone who shares a common ancestor with you e.g Father, Mother, Siblings,
Grandparents',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'No',
                    ],
                    'to' => 33,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Allergies',
                    ],
                    'to' => 33,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Anxiety',
                    ],
                    'to' => 33,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Arthritis',
                    ],
                    'to' => 33,
                    'operations' => []                   
                  ],              
                  [
                    'data' => [
                        'text' => 'Autoimmune Disorder',
                    ],
                    'to' => 33,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Cancer',
                    ],
                    'to' => 33,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Diabetes',
                    ],
                    'to' => 33,
                    'operations' => []                   
                  ],              
                  [
                    'data' => [
                        'text' => 'Depression',
                    ],
                    'to' => 33,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Heart Disease',
                    ],
                    'to' => 33,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Hyperlipidemia',
                    ],
                    'to' => 33,
                    'operations' => []                   
                  ],          
                       [
                    'data' => [
                        'text' => 'Hypertension',
                    ],
                    'to' => 33,
                    'operations' => []                   
                  ],              
                  [
                    'data' => [
                        'text' => 'Infection',
                    ],
                    'to' => 33,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Kidney Disease',
                    ],
                    'to' => 33,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Liver Disease',
                    ],
                    'to' => 33,
                    'operations' => []                   
                  ],              
                  [
                    'data' => [
                        'text' => 'Thyroid',
                    ],
                    'to' => 33,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Tuberculosis',
                    ],
                    'to' => 33,
                    'operations' => []                   
                  ],  
                    

                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 33,
              'data' => [
                'title' => 'Are you taking any medications currently?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_multiple',
                'minimum' => 1,
                'maximum' => 23,
                'to' => 34,
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'None',
                    ],
                    'to' => 34,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Antacids',
                    ],
                    'to' => 34,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'Antibiotics',
                    ],
                    'to' => 34,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Anti-anxiety',
                    ],
                    'to' => 34,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Flatulence',
                    ],
                    'to' => 34,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Antidepressants',
                    ],
                    'to' => 34,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Anti-Diabetic',
                    ],
                    'to' => 34,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Anti - Psychotic drugs',
                    ],
                    'to' => 34,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Ayurveda',
                    ],
                    'to' => 34,
                    'operations' => []                   
                  ],    
                  [
                    'data' => [
                        'text' => 'Blood pressure',
                    ],
                    'to' => 34,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Herbal',
                    ],
                    'to' => 34,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'Homoeopathic',
                    ],
                    'to' => 34,
                    'operations' => []                   
                  ],
                   [
                    'data' => [
                        'text' => 'Insulin',
                    ],
                    'to' => 34,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Laxative',
                    ],
                    'to' => 34,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Multivitamins',
                    ],
                    'to' => 34,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Non- Steroid Anti-Inflammatory Drug',
                    ],
                    'to' => 34,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Oral Contraceptive',
                    ],
                    'to' => 34,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Pain Killer',
                    ],
                    'to' => 34,
                    'operations' => []                   
                  ],       
                  [
                    'data' => [
                        'text' => 'Sleeping pills',
                    ],
                    'to' => 34,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Sleeping pills',
                    ],
                    'to' => 34,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Steroid',
                    ],
                    'to' => 34,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Thyroid',
                    ],
                    'to' => 34,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Unani',
                    ],
                    'to' => 34,
                    'operations' => []                   
                  ],                      
                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 34,
              'data' => [
                'title' => 'How would you rate your sleep?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Poor',
                    ],
                    'to' => 35,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Fair',
                    ],
                    'to' => 35,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Good',
                    ],
                    'to' => 35,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Excellent',
                    ],
                    'to' => 35,
                    'operations' => []                   
                  ],              
                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 35,
              'data' => [
                'title' => 'Do you have problems falling asleep?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Yes',
                    ],
                    'to' => 36,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'No',
                    ],
                    'to' => 36,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Sometimes',
                    ],
                    'to' => 36,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Mostly',
                    ],
                    'to' => 36,
                    'operations' => []                   
                  ],              
                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 36,
              'data' => [
                'title' => 'Is your sleep interrupted frequently?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Yes',
                    ],
                    'to' => 37,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'No',
                    ],
                    'to' => 37,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Sometimes',
                    ],
                    'to' => 37,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Mostly',
                    ],
                    'to' => 37,
                    'operations' => []                   
                  ],              
                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 37,
              'data' => [
                'title' => 'Do you wake up feeling refreshed?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Yes',
                    ],
                    'to' => 38,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'No',
                    ],
                    'to' => 38,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Sometimes',
                    ],
                    'to' => 38,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Mostly',
                    ],
                    'to' => 38,
                    'operations' => []                   
                  ],              
                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 38,
              'data' => [
                'title' => 'Do you snore or have sleep apnea?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Yes',
                    ],
                    'to' => 39,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'No',
                    ],
                    'to' => 39,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Sometimes',
                    ],
                    'to' => 39,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Mostly',
                    ],
                    'to' => 39,
                    'operations' => []                   
                  ],              
                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 39,
              'data' => [
                'title' => 'What kind of dreams do you have?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'None',
                    ],
                    'to' => 40,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Good',
                    ],
                    'to' => 40,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Vivid',
                    ],
                    'to' => 40,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Nightmares',
                    ],
                    'to' => 40,
                    'operations' => []                   
                  ],              
                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 40,
              'data' => [
                'title' => 'How often do you engage in physical activity?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Daily',
                    ],
                    'to' => 41,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => '1-2 Times a week',
                    ],
                    'to' => 41,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => '3-4 times a week',
                    ],
                    'to' => 41,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Never',
                    ],
                    'to' => 41,
                    'operations' => []                   
                  ],              
                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 41,
              'data' => [
                'title' => 'What form of physical activity you engage in?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_multiple',
                'minimum' => 1,
                'maximum' => 10,
                'to' => 42,
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'None',
                    ],
                    'to' => 42,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Bloating',
                    ],
                    'to' => 42,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'Aerobics',
                    ],
                    'to' => 42,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Cycling',
                    ],
                    'to' => 42,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Gym',
                    ],
                    'to' => 42,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Jogging',
                    ],
                    'to' => 42,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Running',
                    ],
                    'to' => 42,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Swimming',
                    ],
                    'to' => 42,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Walking',
                    ],
                    'to' => 42,
                    'operations' => []                   
                  ],   
                   [
                    'data' => [
                        'text' => 'Yoga',
                    ],
                    'to' => 42,
                    'operations' => []                   
                  ],  
                   [
                    'data' => [
                        'text' => 'Zumba',
                    ],
                    'to' => 42,
                    'operations' => []                   
                  ],                
                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 42,
              'data' => [
                'title' => 'How would you rate your current stress level?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Low',
                    ],
                    'to' => 43,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Moderate',
                    ],
                    'to' => 43,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'High',
                    ],
                    'to' => 43,
                    'operations' => []                   
                  ],  
                             
                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 43,
              'data' => [
                'title' => 'What is your source of current stress?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Colleagues',
                    ],
                    'to' => 44,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Financial',
                    ],
                    'to' => 44,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Family',
                    ],
                    'to' => 44,
                    'operations' => []                   
                  ],
                   [
                    'data' => [
                        'text' => 'Friends',
                    ],
                    'to' => 44,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Grief',
                    ],
                    'to' => 44,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Health',
                    ],
                    'to' => 44,
                    'operations' => []                   
                  ],   [
                    'data' => [
                        'text' => 'Job',
                    ],
                    'to' => 44,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Relationship',
                    ],
                    'to' => 44,
                    'operations' => []                   
                  ],  
                             
                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 44,
              'data' => [
                'title' => 'How do you rate your energy?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'High Fresh, energized throughout the day',
                    ],
                    'to' => 45,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Medium Not fresh in morning. Better during the day',
                    ],
                    'to' => 45,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Low - Tired most of the day',
                    ],
                    'to' => 45,
                    'operations' => []                   
                  ],  
                             
                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 45,
              'data' => [
                'title' => 'How are your social skills?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Make friends easily',
                    ],
                    'to' => 46,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Like to stay alone',
                    ],
                    'to' => 46,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Initially reserved',
                    ],
                    'to' => 46,
                    'operations' => []                   
                  ],  
                             
                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 46,
              'data' => [
                'title' => 'Any major incident/ grief/ stress/ that has had an impact on your overall emotional state?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Yes',
                    ],
                    'to' => 47,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'No',
                    ],
                    'to' => 48,
                    'operations' => []                   
                  ],
                   
                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 47,
              'data' => [
                'title' => 'Specify incident/ grief/ stress/ that has had an impact on your overall emotional state?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'text',
                'to' => 48           
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 48,
              'data' => [
                'title' => 'When upset, do you:',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'like to share your stress with someone',
                    ],
                    'to' => 49,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'tend to bottle it up',
                    ],
                    'to' => 49,
                    'operations' => []                   
                  ],
                 
                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 49,
              'data' => [
                'title' => 'Are you systemic & particular about?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Order',
                    ],
                    'to' => 50,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Cleanliness',
                    ],
                    'to' => 50,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Personal appearance',
                    ],
                    'to' => 50,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Spending money',
                    ],
                    'to' => 50,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Time',
                    ],
                    'to' => 50,
                    'operations' => []                   
                  ],            
                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 50,
              'data' => [
                'title' => 'Do you have fear of:',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_multiple',
                'minimum' => 1,
                'maximum' => 7,
                'to' => 51,
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Animal',
                    ],
                    'to' => 51,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Darkness',
                    ],
                    'to' => 51,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'Height',
                    ],
                    'to' => 51,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Falling sick',
                    ],
                    'to' => 51,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Heart Disease',
                    ],
                    'to' => 51,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Cancer',
                    ],
                    'to' => 51,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Water',
                    ],
                    'to' => 51,
                    'operations' => []                   
                  ],
                  
                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 51,
              'data' => [
                'title' => 'When things don’t go according to your wish, how do you react?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Get Angry & yell',
                    ],
                    'to' => 52,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Angry & bottle up',
                    ],
                    'to' => 52,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Cry',
                    ],
                    'to' => 52,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Don’t bother',
                    ],
                    'to' => 52,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Feel bad but keep quite',
                    ],
                    'to' => 52,
                    'operations' => []                   
                  ],               
                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 52,
              'data' => [
                'title' => 'Does being mentally occupied help you when you are not feeling physically well?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Yes',
                    ],
                    'to' => 53,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'No',
                    ],
                    'to' => 53,
                    'operations' => []                   
                  ],
                  
                ]                  
              ]
            ],[
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 53,
              'data' => [
                'title' => 'In the past 3 months, have you often been bothered by feeling down, depressed, or hopeless?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Not at all',
                    ],
                    'to' => 54,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Several Days',
                    ],
                    'to' => 54,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'More than one-half of the days',
                    ],
                    'to' => 54,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Nearly Everyday',
                    ],
                    'to' => 54,
                    'operations' => []                   
                  ],              
                ]                  
              ]
            ],[
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 54,
              'data' => [
                'title' => 'Do you have anxiety attacks?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Not at all',
                    ],
                    'to' => 55,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Several Days',
                    ],
                    'to' => 55,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'More than one-half of the days',
                    ],
                    'to' => 55,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Nearly Everyday',
                    ],
                    'to' => 55,
                    'operations' => []                   
                  ],              
                ]                  
              ]
            ],[
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 55,
              'data' => [
                'title' => 'Have you had thoughts of harming yourself?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Not at all',
                    ],
                    'to' => 56,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Several Days',
                    ],
                    'to' => 56,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'More than one-half of the days',
                    ],
                    'to' => 56,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Nearly Everyday',
                    ],
                    'to' => 56,
                    'operations' => []                   
                  ],              
                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 56,
              'data' => [
                'title' => 'Which of the following describe your present state of personality the best?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_multiple',
                'minimum' => 1,
                'maximum' => 25,
                'to' => 57,
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Anxious',
                    ],
                    'to' => 57,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Angry',
                    ],
                    'to' => 57,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'Aggressive',
                    ],
                    'to' => 57,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Calm',
                    ],
                    'to' => 57,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Careless',
                    ],
                    'to' => 57,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Cheerful',
                    ],
                    'to' => 57,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Clingy',
                    ],
                    'to' => 57,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Confident',
                    ],
                    'to' => 57,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Creative',
                    ],
                    'to' => 57,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Critical',
                    ],
                    'to' => 57,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Depressed',
                    ],
                    'to' => 57,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'Dominating',
                    ],
                    'to' => 57,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Excitable',
                    ],
                    'to' => 57,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Fearful',
                    ],
                    'to' => 57,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Headstrong',
                    ],
                    'to' => 57,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Imaginative',
                    ],
                    'to' => 57,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Insecure',
                    ],
                    'to' => 57,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Irritable',
                    ],
                    'to' => 57,
                    'operations' => []                   
                  ],                 
                  [
                    'data' => [
                        'text' => 'Jealous',
                    ],
                    'to' => 57,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Mild',
                    ],
                    'to' => 57,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'Nervous',
                    ],
                    'to' => 57,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Organized',
                    ],
                    'to' => 57,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Perfectionist',
                    ],
                    'to' => 57,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Reserved',
                    ],
                    'to' => 57,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Timid',
                    ],
                    'to' => 57,
                    'operations' => []                   
                  ],
                  
                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 57,
              'data' => [
                'title' => 'How is your thought pattern?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Erratic',
                    ],
                    'to' => 58,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Fixed',
                    ],
                    'to' => 58,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Normal',
                    ],
                    'to' => 58,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Negative',
                    ],
                    'to' => 58,
                    'operations' => []                   
                  ],   
                   [
                    'data' => [
                        'text' => 'Obsessive',
                    ],
                    'to' => 58,
                    'operations' => []                   
                  ], 
                   [
                    'data' => [
                        'text' => 'Repetitive',
                    ],
                    'to' => 58,
                    'operations' => []                   
                  ], 
                   [
                    'data' => [
                        'text' => 'Steady',
                    ],
                    'to' => 58,
                    'operations' => []                   
                  ],            
                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 58,
              'data' => [
                'title' => 'How is your memory?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Average',
                    ],
                    'to' => 59,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Good',
                    ],
                    'to' => 59,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Poor',
                    ],
                    'to' => 59,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Sharp',
                    ],
                    'to' => 59,
                    'operations' => []                   
                  ],              
                ]                  
              ]
            ],[
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 59,
              'data' => [
                'title' => 'Rate your mood over the past month',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Anxious',
                    ],
                    'to' => 60,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Content',
                    ],
                    'to' => 60,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Happy',
                    ],
                    'to' => 60,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Irritable',
                    ],
                    'to' => 60,
                    'operations' => []                   
                  ],      
                  [
                    'data' => [
                        'text' => 'Mood swing',
                    ],
                    'to' => 60,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Sad',
                    ],
                    'to' => 60,
                    'operations' => []                   
                  ],           
                ]                  
              ]
            ],[
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 60,
              'data' => [
                'title' => 'Are you currently sexually active?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Yes',
                    ],
                    'to' => 61,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'No',
                    ],
                    'to' => 61,
                    'operations' => []                   
                  ],
                             
                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 61,
              'data' => [
                'title' => 'Which of the following symptoms you experience?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Difficulty achieving an orgasm',
                    ],
                    'to' => 62,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Difficulty becoming aroused',
                    ],
                    'to' => 62,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Lack of interest',
                    ],
                    'to' => 62,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Lack of lubrication',
                    ],
                    'to' => 62,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Pain or discomfort during sexual activity',
                    ],
                    'to' => 62,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'None',
                    ],
                    'to' => 62,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'All',
                    ],
                    'to' => 62,
                    'operations' => []                   
                  ]            
                ]                  
              ]
            ],[
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 62,
              'data' => [
                'title' => 'Describe your Skin texture?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Dry',
                    ],
                    'to' => 63,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Normal',
                    ],
                    'to' => 63,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Oily',
                    ],
                    'to' => 63,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Rough',
                    ],
                    'to' => 63,
                    'operations' => []                   
                  ],              
                ]                  
              ]
            ],[
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 63,
              'data' => [
                'title' => 'Describe your complexion?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Dark',
                    ],
                    'to' => 64,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Fair',
                    ],
                    'to' => 64,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Pale',
                    ],
                    'to' => 64,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Pinkish',
                    ],
                    'to' => 64,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Wheatish',
                    ],
                    'to' => 64,
                    'operations' => []                   
                  ],             
                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 64,
              'data' => [
                'title' => 'Describe your Hair & Scalp quality?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_multiple',
                'minimum' => 1,
                'maximum' => 9,
                'to' => 64,
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Breakage',
                    ],
                    'to' => 65,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Dandruff',
                    ],
                    'to' => 65,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'Dry',
                    ],
                    'to' => 65,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Frizzy',
                    ],
                    'to' => 65,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Hair falling',
                    ],
                    'to' => 65,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Oily',
                    ],
                    'to' => 65,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Premature greying',
                    ],
                    'to' => 65,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Rough',
                    ],
                    'to' => 65,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Soft',
                    ],
                    'to' => 65,
                    'operations' => []                   
                  ],                 
                ]                  
              ]
            ],[
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 65,
              'data' => [
                'title' => 'Describe your built',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_multiple',
                'minimum' => 1,
                'maximum' => 8,
                'to' => 66,
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Bony',
                    ],
                    'to' => 66,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Flexible',
                    ],
                    'to' => 66,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'Lean',
                    ],
                    'to' => 66,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Muscular',
                    ],
                    'to' => 66,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Maintained weight',
                    ],
                    'to' => 66,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Gas formation',
                    ],
                    'to' => 66,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Obese',
                    ],
                    'to' => 66,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Tend to gain weight easily',
                    ],
                    'to' => 66,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Tend to lose weight easily',
                    ],
                    'to' => 66,
                    'operations' => []                   
                  ],                 
                ]                  
              ]
            ],
            [
              'tree_id' => $trees[str_slug('General Assessment')],
              'identifier' => 66,
              'data' => [
                'title' => 'How is your thermal reaction?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Feel hot easily',
                    ],
                    'to' => null,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Feel cold easily',
                    ],
                    'to' => null,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Not sensitive to hot or cold',
                    ],
                    'to' => null,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Prefer cold things',
                    ],
                    'to' => null,
                    'operations' => []                   
                  ],     
                  [
                    'data' => [
                        'text' => 'Prefer hot things',
                    ],
                    'to' => null,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Sensitive to hot or cold',
                    ],
                    'to' => null,
                    'operations' => []                   
                  ],          
                ]                  
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
        type: 'select_one', // logic, select_one, select_many, text, date, number, upload, camera, info
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
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
            'ga' => Tree::notDeleted()->whereSlug('ga')->first()->id,
        ];


        $nodes = [
          [
              'tree_id' => $trees['ga'],
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
              'tree_id' => $trees['ga'],
              'identifier' => 2,
              'data' => [
                'title' => 'Which of the following food items you consume regularly in your diet?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_many',
                'minimum' => 1,
                'maximum' => 7,
                'to' => 3,
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Chicken',
                    ],
                    'to' => 3,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Dairy Products',
                    ],
                    'to' => 3,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Egg',
                    ],
                    'to' => 3,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Fish',
                    ],
                    'to' => 3,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Fruits',
                    ],
                    'to' => 3,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'Meat (Red Meat)',
                    ],
                    'to' => 3,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Vegetables',
                    ],
                    'to' => 3,
                    'operations' => []                   
                  ],                                   
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 3,
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
                    'to' => 4,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Erratic',
                    ],
                    'to' => 4,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Poor',
                    ],
                    'to' => 4,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Small',
                    ],
                    'to' => 4,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Uncontrolled',
                    ],
                    'to' => 4,
                    'operations' => []                   
                  ],
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 4,
              'data' => [
                'title' => 'Do you frequently encounter any of these gastric complaints?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_many',
                'minimum' => 1,
                'maximum' => 6,
                'to' => 5,
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Acidity',
                    ],
                    'to' => 5,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Bloating',
                    ],
                    'to' => 5,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'Delicate gut',
                    ],
                    'to' => 5,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Eructation (Burps)',
                    ],
                    'to' => 5,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Flatulence (Passing Gas)',
                    ],
                    'to' => 5,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Slow digestion ',
                    ],
                    'to' => 5,
                    'operations' => []                   
                  ]                 
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 5,
              'data' => [
                'title' => 'Which of the following food do you enjoy more?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Fried',
                    ],
                    'to' => 6,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Salty',
                    ],
                    'to' => 6,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Sour',
                    ],
                    'to' => 6,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Spicy',
                    ],
                    'to' => 6,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Sugary items',
                    ],
                    'to' => 6,
                    'operations' => []                   
                  ],
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 6,
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
                    'to' => 7,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => '5-8 glass',
                    ],
                    'to' => 7,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'More than 8 glasses',
                    ],
                    'to' => 7,
                    'operations' => []                   
                  ],                
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 7,
              'data' => [
                'title' => 'Which of the following you drink on a daily basis?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_many',
                'minimum' => 1,
                'maximum' => 8,
                'to' => 8,
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Aerated drinks',
                    ],
                    'to' => 8,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Coffee',
                    ],
                    'to' => 8,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'Energy Drinks',
                    ],
                    'to' => 8,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Fruit juice –Fresh',
                    ],
                    'to' => 8,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Fruit juice – Canned',
                    ],
                    'to' => 8,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Green Tea',
                    ],
                    'to' => 8,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Milk',
                    ],
                    'to' => 8,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Regular Tea',
                    ],
                    'to' => 8,
                    'operations' => []                   
                  ],   
                                   
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 8,
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
                    'to' => 9,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Irregular, not every day',
                    ],
                    'to' => 9,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Ineffectual, Frequent urge during the day',
                    ],
                    'to' => 9,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Loose motions generally',
                    ],
                    'to' => 9,
                    'operations' => []                   
                  ],     
                  [
                    'data' => [
                        'text' => 'Unsatisfactory, but once a day',
                    ],
                    'to' => 9,
                    'operations' => []                   
                  ],                    
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 9,
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
                    'to' => 10,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Everyday',
                    ],
                    'to' => 10,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Social',
                    ],
                    'to' => 10,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Quit',
                    ],
                    'to' => 10,
                    'operations' => []                   
                  ],
                ]                  
              ]
            ],
                        [
              'tree_id' => $trees['ga'],
              'identifier' => 10,
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
                    'to' => 11,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Everyday',
                    ],
                    'to' => 11,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Social',
                    ],
                    'to' => 11,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Quit',
                    ],
                    'to' => 11,
                    'operations' => []                   
                  ],
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 11,
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
                    'to' => 12,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => '1-2 times a week',
                    ],
                    'to' => 12,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => '3-4 times a week',
                    ],
                    'to' => 12,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Almost daily',
                    ],
                    'to' => 12,
                    'operations' => []                   
                  ],
                  
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 12,
              'data' => [
                'title' => 'How many times a day do you use social media platforms (Facebook, Instagram, twitter, snapchat etc.)?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Not every day',
                    ],
                    'to' => 13,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Once a day',
                    ],
                    'to' => 13,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => '2-5 times a day',
                    ],
                    'to' => 13,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => '5-10 times a day',
                    ],
                    'to' => 13,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => '10+ times',
                    ],
                    'to' => 13,
                    'operations' => []                   
                  ],
                  
                ]                  
              ]
            ],
             [
              'tree_id' => $trees['ga'],
              'identifier' => 13,
              'data' => [
                'title' => 'At what age did you start with your menses?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'number',
                'to' => 14              
              ]
            ],

            [
              'tree_id' => $trees['ga'],
              'identifier' => 14,
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
                    'to' => 15,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Irregular',
                    ],
                    'to' => 15,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Stopped',
                    ],
                    'to' => 15,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Absent',
                    ],
                    'to' => 15,
                    'operations' => []                   
                  ],              
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 15,
              'data' => [
                'title' => 'How heavy is your menstrual flow usually?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_many',
                'minimum' => 1,
                'maximum' => 5,
                'to' => 16,
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Light',
                    ],
                    'to' => 16,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Moderate',
                    ],
                    'to' => 16,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'Heavy',
                    ],
                    'to' => 16,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'With clots',
                    ],
                    'to' => 16,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Without Clots',
                    ],
                    'to' => 16,
                    'operations' => []                   
                  ],                  
                ]                  
              ]
            ],

            [
              'tree_id' => $trees['ga'],
              'identifier' => 16,
              'data' => [
                'title' => 'Do you experience any of the following symptoms before or during menses?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_many',
                'minimum' => 1,
                'maximum' => 14,
                'to' => 17,
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Back Pain',
                    ],
                    'to' => 17,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Bloating',
                    ],
                    'to' => 17,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'Breast Tenderness',
                    ],
                    'to' => 17,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Change In appetites',
                    ],
                    'to' => 17,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Constipation',
                    ],
                    'to' => 17,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Cramps',
                    ],
                    'to' => 17,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Depression',
                    ],
                    'to' => 17,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Diarrhea',
                    ],
                    'to' => 17,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Fatigue',
                    ],
                    'to' => 17,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Headache',
                    ],
                    'to' => 17,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Insomnia',
                    ],
                    'to' => 17,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Irritability',
                    ],
                    'to' => 17,
                    'operations' => []                   
                  ],                 
                  [
                    'data' => [
                        'text' => 'Nausea',
                    ],
                    'to' => 17,
                    'operations' => []                   
                  ],    
                  [
                    'data' => [
                        'text' => 'Palpitation',
                    ],
                    'to' => 17,
                    'operations' => []                   
                  ],               
                ]                  
              ]
            ],

            [
              'tree_id' => $trees['ga'],
              'identifier' => 17,
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
                    'to' => 18,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'No',
                    ],
                    'to' => 18,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Not sure',
                    ],
                    'to' => 18,
                    'operations' => []                   
                  ],  
                           
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 18,
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
                        'text' => 'Throughout the month',
                    ],
                    'to' => 19,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Before menses',
                    ],
                    'to' => 19,
                    'operations' => []                   
                  ],     
                  [
                    'data' => [
                        'text' => 'After menses',
                    ],
                    'to' => 19,
                    'operations' => []                   
                  ],            
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 19,
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
                    'to' => 20,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Burning',
                    ],
                    'to' => 20,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Increased frequency',
                    ],
                    'to' => 20,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Incontinence',
                    ],
                    'to' => 20,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Involuntary',
                    ],
                    'to' => 20,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Foul - Smelling',
                    ],
                    'to' => 20,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Painful',
                    ],
                    'to' => 20,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Urgency',
                    ],
                    'to' => 20,
                    'operations' => []                   
                  ],           
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 20,
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
                    'to' => 21,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'No',
                    ],
                    'to' => 21,
                    'operations' => []                   
                  ],                            
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 21,
              'data' => [
                'title' => 'Number of vaginal deliveries',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'number',
                'to' => 22              
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 22,
              'data' => [
                'title' => 'Number of Caesarian deliverie',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'number',
                'to' => 23             
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 23,
              'data' => [
                'title' => 'Number of abortions',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'number',
                'to' => 24             
              ]
            ],

            [
              'tree_id' => $trees['ga'],
              'identifier' => 24,
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
                    'to' => 25,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Change in libido',
                    ],
                    'to' => 25,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Excess Sweating',
                    ],
                    'to' => 25,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Fatigue',
                    ],
                    'to' => 25,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Hot flushes',
                    ],
                    'to' => 25,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Insomnia',
                    ],
                    'to' => 25,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Mood changeable',
                    ],
                    'to' => 25,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Vagina dryness',
                    ],
                    'to' => 25,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Weight gain',
                    ],
                    'to' => 25,
                    'operations' => []                   
                  ],               
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 25,
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
                    'to' => 26,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'No',
                    ],
                    'to' => 27,
                    'operations' => []                   
                  ],                 
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 26,
              'data' => [
                'title' => 'Specify history of any medical illness?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'text',
                'to' => 27             
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 27,
              'data' => [
                'title' => 'Do you have any medical conditions currently?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Arthritis',
                    ],
                    'to' => 29,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Diabetes',
                    ],
                    'to' => 29,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Hypertension',
                    ],
                    'to' => 29,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'PCOD',
                    ],
                    'to' => 29,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Thyroid',
                    ],
                    'to' => 29,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Others',
                    ],
                    'to' => 28,
                    'operations' => []                   
                  ],      
              ]
            ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 28,
              'data' => [
                'title' => 'Please Specify your medical condition?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'text',
                'to' => 29             
              ]
            ],
            [
              'tree_id' => $trees['ga'],
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
                        'text' => 'Egg',
                    ],
                    'to' => 30,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Fish',
                    ],
                    'to' => 30,
                    'operations' => []                   
                  ],    
                   [
                    'data' => [
                        'text' => 'Milk(lactose)',
                    ],
                    'to' => 30,
                    'operations' => []                   
                  ],                      
                  [
                    'data' => [
                        'text' => 'Nuts',
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
                        'text' => 'Soy',
                    ],
                    'to' => 30,
                    'operations' => []                   
                  ],                      
                  [
                    'data' => [
                        'text' => 'Wheat(Gluten)',
                    ],
                    'to' => 30,
                    'operations' => []                   
                  ],   
                   [
                    'data' => [
                        'text' => 'Nono',
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
              'tree_id' => $trees['ga'],
              'identifier' => 30,
              'data' => [
                'title' => 'Does any of your direct blood relatives* have or had any medical conditions?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Allergies',
                    ],
                    'to' => 31,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Anxiety',
                    ],
                    'to' => 31,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Arthritis',
                    ],
                    'to' => 31,
                    'operations' => []                   
                  ],              
                  [
                    'data' => [
                        'text' => 'Autoimmune Disorder',
                    ],
                    'to' => 31,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Cancer',
                    ],
                    'to' => 31,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Diabetes',
                    ],
                    'to' => 31,
                    'operations' => []                   
                  ],              
                  [
                    'data' => [
                        'text' => 'Depression',
                    ],
                    'to' => 31,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Heart Disease',
                    ],
                    'to' => 31,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Hyperlipidemia',
                    ],
                    'to' => 31,
                    'operations' => []                   
                  ],          
                       [
                    'data' => [
                        'text' => 'Hypertension',
                    ],
                    'to' => 31,
                    'operations' => []                   
                  ],              
                  [
                    'data' => [
                        'text' => 'Infection',
                    ],
                    'to' => 31,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Kidney Disease',
                    ],
                    'to' => 31,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Liver Disease',
                    ],
                    'to' => 31,
                    'operations' => []                   
                  ],              
                  [
                    'data' => [
                        'text' => 'Thyroid',
                    ],
                    'to' => 31,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Tuberculosis',
                    ],
                    'to' => 31,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'None',
                    ],
                    'to' => 31,
                    'operations' => []                   
                  ]
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 31,
              'data' => [
                'title' => 'Are you taking any medications currently?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_many',
                'minimum' => 1,
                'maximum' => 23,
                'to' => 32,
                'selectables' => [                 
                  [
                    'data' => [
                        'text' => 'Antacids',
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'Antibiotics',
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Anti-anxiety',
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ],                  
                  [
                    'data' => [
                        'text' => 'Antidepressants',
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Anti-Diabetic',
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Anti - Psychotic drugs',
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Ayurveda',
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ],    
                  [
                    'data' => [
                        'text' => 'Blood pressure',
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Herbal',
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'Homoeopathic',
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ],
                   [
                    'data' => [
                        'text' => 'Insulin',
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Laxative',
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Multivitamins',
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Non- Steroid Anti-Inflammatory Drug',
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Oral Contraceptive',
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Pain Killer',
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ],       
                  [
                    'data' => [
                        'text' => 'Sleeping pills',
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Statin',
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Steroid',
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Thyroid',
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Unani',
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ], 
                   [
                    'data' => [
                        'text' => 'None',
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ],                     
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 32,
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
                    'to' => 33,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Fair',
                    ],
                    'to' => 33,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Good',
                    ],
                    'to' => 33,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Excellent',
                    ],
                    'to' => 33,
                    'operations' => []                   
                  ],              
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 33,
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
                    'to' => 34,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'No',
                    ],
                    'to' => 34,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Sometimes',
                    ],
                    'to' => 34,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Mostly',
                    ],
                    'to' => 34,
                    'operations' => []                   
                  ],              
                ]                  
              ]
            ],

            [
              'tree_id' => $trees['ga'],
              'identifier' => 34,
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
                    'to' => 35,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'No',
                    ],
                    'to' => 35,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Sometimes',
                    ],
                    'to' => 35,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Mostly',
                    ],
                    'to' => 35,
                    'operations' => []                   
                  ],              
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 35,
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
                    'to' => 36,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Good',
                    ],
                    'to' => 36,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Vivid',
                    ],
                    'to' => 36,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Nightmares',
                    ],
                    'to' => 36,
                    'operations' => []                   
                  ],              
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 36,
              'data' => [
                'title' => 'How often do you engage in Exercise / Physical Activity',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Daily',
                    ],
                    'to' => 37,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => '1-2 Times a week',
                    ],
                    'to' => 37,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => '3-4 times a week',
                    ],
                    'to' => 37,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Never',
                    ],
                    'to' => 37,
                    'operations' => []                   
                  ],              
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 37,
              'data' => [
                'title' => 'What form of physical activity you engage in?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_many',
                'minimum' => 1,
                'maximum' => 10,
                'to' => 38,
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'None',
                    ],
                    'to' => 38,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Bloating',
                    ],
                    'to' => 38,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'Aerobics',
                    ],
                    'to' => 38,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Cycling',
                    ],
                    'to' => 38,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Gym',
                    ],
                    'to' => 38,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Jogging',
                    ],
                    'to' => 38,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Running',
                    ],
                    'to' => 38,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Swimming',
                    ],
                    'to' => 38,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Walking',
                    ],
                    'to' => 38,
                    'operations' => []                   
                  ],   
                   [
                    'data' => [
                        'text' => 'Yoga',
                    ],
                    'to' => 38,
                    'operations' => []                   
                  ],  
                   [
                    'data' => [
                        'text' => 'Zumba',
                    ],
                    'to' => 38,
                    'operations' => []                   
                  ],                
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 38,
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
                    'to' => 39,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Moderate',
                    ],
                    'to' => 39,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'High',
                    ],
                    'to' => 39,
                    'operations' => []                   
                  ],  
                             
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 39,
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
                    'to' => 40,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Financial',
                    ],
                    'to' => 40,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Family',
                    ],
                    'to' => 40,
                    'operations' => []                   
                  ],
                   [
                    'data' => [
                        'text' => 'Friends',
                    ],
                    'to' => 40,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Grief',
                    ],
                    'to' => 40,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Health',
                    ],
                    'to' => 40,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Job',
                    ],
                    'to' => 40,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Relationship',
                    ],
                    'to' => 40,
                    'operations' => []                   
                  ],                              
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 40,
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
                    'to' => 41,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Like to stay alone',
                    ],
                    'to' => 41,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Initially reserved',
                    ],
                    'to' => 41,
                    'operations' => []                   
                  ],  
                             
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 41,
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
                    'to' => 42,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'No',
                    ],
                    'to' => 43,
                    'operations' => []                   
                  ],
                   
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 42,
              'data' => [
                'title' => 'Specify incident/ grief/ stress/ that has had an impact on your overall emotional state?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'text',
                'to' => 43           
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 43,
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
                    'to' => 44,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'tend to bottle it up & keep thinking about it',
                    ],
                    'to' => 44,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'manage it on your own & move on',
                    ],
                    'to' => 44,
                    'operations' => []                   
                  ],                 
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 44,
              'data' => [
                'title' => 'Are you particular about:',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Order',
                    ],
                    'to' => 45,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Cleanliness',
                    ],
                    'to' => 45,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Personal appearance',
                    ],
                    'to' => 45,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Spending money',
                    ],
                    'to' => 45,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Time',
                    ],
                    'to' => 45,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'None',
                    ],
                    'to' => 45,
                    'operations' => []                   
                  ],            
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 45,
              'data' => [
                'title' => 'Do you fear:',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_many',
                'minimum' => 1,
                'maximum' => 5,
                'to' => 46,
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Animal',
                    ],
                    'to' => 46,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Darkness',
                    ],
                    'to' => 46,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'Height',
                    ],
                    'to' => 46,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Incurable Disease',
                    ],
                    'to' => 46,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Water',
                    ],
                    'to' => 46,
                    'operations' => []                   
                  ],
                  
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 46,
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
                    'to' => 47,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Angry & bottle up',
                    ],
                    'to' => 47,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Cry',
                    ],
                    'to' => 47,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Don’t bother',
                    ],
                    'to' => 47,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Feel bad but keep quite',
                    ],
                    'to' => 47,
                    'operations' => []                   
                  ],               
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 47,
              'data' => [
                'title' => 'Do you have anxiety attacks?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Never',
                    ],
                    'to' => 48,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Nearly Everyday',
                    ],
                    'to' => 48,
                    'operations' => []                   
                  ],              
                  [
                    'data' => [
                        'text' => 'Several Days',
                    ],
                    'to' => 48,
                    'operations' => []                   
                  ],
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 48,
              'data' => [
                'title' => 'Have you had thoughts of harming yourself?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Never',
                    ],
                    'to' => 49,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Nearly Everyday',
                    ],
                    'to' => 49,
                    'operations' => []                   
                  ],              
                  [
                    'data' => [
                        'text' => 'Several Days',
                    ],
                    'to' => 49,
                    'operations' => []                   
                  ],
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 49,
              'data' => [
                'title' => 'Which of the following describe your present state of personality the best?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_many',
                'minimum' => 1,
                'maximum' => 24,
                'to' => 50,
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Anxious',
                    ],
                    'to' => 50,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Aggressive',
                    ],
                    'to' => 50,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Calm',
                    ],
                    'to' => 50,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Careless',
                    ],
                    'to' => 50,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Cheerful',
                    ],
                    'to' => 50,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Clingy',
                    ],
                    'to' => 50,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Confident',
                    ],
                    'to' => 50,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Creative',
                    ],
                    'to' => 50,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Critical',
                    ],
                    'to' => 50,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Depressed',
                    ],
                    'to' => 50,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'Dominating',
                    ],
                    'to' => 50,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Excitable',
                    ],
                    'to' => 50,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Fearful',
                    ],
                    'to' => 50,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Headstrong',
                    ],
                    'to' => 50,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Imaginative',
                    ],
                    'to' => 50,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Insecure',
                    ],
                    'to' => 50,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Irritable',
                    ],
                    'to' => 50,
                    'operations' => []                   
                  ],                 
                  [
                    'data' => [
                        'text' => 'Jealous',
                    ],
                    'to' => 50,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Mild',
                    ],
                    'to' => 50,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'Nervous',
                    ],
                    'to' => 50,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Organized',
                    ],
                    'to' => 50,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Perfectionist',
                    ],
                    'to' => 50,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Reserved',
                    ],
                    'to' => 50,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Timid',
                    ],
                    'to' => 50,
                    'operations' => []                   
                  ],
                  
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 50,
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
                    'to' => 51,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Fixed',
                    ],
                    'to' => 51,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Normal',
                    ],
                    'to' => 51,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Negative',
                    ],
                    'to' => 51,
                    'operations' => []                   
                  ],   
                   [
                    'data' => [
                        'text' => 'Obsessive',
                    ],
                    'to' => 51,
                    'operations' => []                   
                  ], 
                   [
                    'data' => [
                        'text' => 'Repetitive',
                    ],
                    'to' => 51,
                    'operations' => []                   
                  ]            
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 51,
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
                    'to' => 52,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Good',
                    ],
                    'to' => 52,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Poor',
                    ],
                    'to' => 52,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Sharp',
                    ],
                    'to' => 52,
                    'operations' => []                   
                  ],              
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 52,
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
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 53,
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
                    'to' => 54,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Difficulty becoming aroused',
                    ],
                    'to' => 54,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Lack of interest',
                    ],
                    'to' => 54,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Lack of lubrication',
                    ],
                    'to' => 54,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Pain or discomfort during sexual activity',
                    ],
                    'to' => 54,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'None',
                    ],
                    'to' => 54,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'All',
                    ],
                    'to' => 54,
                    'operations' => []                   
                  ]            
                ]                  
              ]
            ],[
              'tree_id' => $trees['ga'],
              'identifier' => 54,
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
                    'to' => 55,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Normal',
                    ],
                    'to' => 55,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Oily',
                    ],
                    'to' => 55,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Rough',
                    ],
                    'to' => 55,
                    'operations' => []                   
                  ],              
                ]                  
              ]
            ],[
              'tree_id' => $trees['ga'],
              'identifier' => 55,
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
                    'to' => 56,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Fair',
                    ],
                    'to' => 56,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Pale',
                    ],
                    'to' => 56,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Pinkish',
                    ],
                    'to' => 56,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Wheatish',
                    ],
                    'to' => 56,
                    'operations' => []                   
                  ],             
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 56,
              'data' => [
                'title' => 'Describe your Hair quality?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_many',
                'minimum' => 1,
                'maximum' => 9,
                'to' => 57,
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Breakage',
                    ],
                    'to' => 57,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Dandruff',
                    ],
                    'to' => 57,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'Dry',
                    ],
                    'to' => 57,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Frizzy',
                    ],
                    'to' => 57,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Falling',
                    ],
                    'to' => 57,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Oily',
                    ],
                    'to' => 57,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Premature greying',
                    ],
                    'to' => 57,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Rough',
                    ],
                    'to' => 57,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Soft',
                    ],
                    'to' => 57,
                    'operations' => []                   
                  ],                 
                ]                  
              ]
            ],[
              'tree_id' => $trees['ga'],
              'identifier' => 57,
              'data' => [
                'title' => 'Describe your built',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_many',
                'minimum' => 1,
                'maximum' => 8,
                'to' => 58,
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Bony',
                    ],
                    'to' => 58,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Flexible',
                    ],
                    'to' => 58,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'Lean',
                    ],
                    'to' => 58,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Muscular',
                    ],
                    'to' => 58,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Maintained weight',
                    ],
                    'to' => 58,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Gas formation',
                    ],
                    'to' => 58,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Obese',
                    ],
                    'to' => 58,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Tend to gain weight easily',
                    ],
                    'to' => 58,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Tend to lose weight easily',
                    ],
                    'to' => 58,
                    'operations' => []                   
                  ],                 
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 58,
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
                    'to' => 59,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Feel cold easily',
                    ],
                    'to' => 59,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Not sensitive to hot or cold',
                    ],
                    'to' => 59,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Prefer cold things',
                    ],
                    'to' => 59,
                    'operations' => []                   
                  ],     
                  [
                    'data' => [
                        'text' => 'Prefer hot things',
                    ],
                    'to' => 59,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Sensitive to hot or cold',
                    ],
                    'to' => 59,
                    'operations' => []                   
                  ],          
                ]                  
              ]
            ],
           [
            'tree_id' => $trees['ga'],
            'identifier' => 59,
            'data' => [
              'title' => 'What is your name ?',
              'body' => '',
            ],               
            'linker' => [                  
              'type' => 'text',
              'to' => 60              
            ]
          ],
          [
            'tree_id' => $trees['ga'],
            'identifier' => 60,
            'data' => [
              'title' => 'What is your phone number?',
              'body' => '',
            ],               
            'linker' => [                  
              'type' => 'number',
              'to' => 61              
            ]
          ],
          [
            'tree_id' => $trees['ga'],
            'identifier' => 61,
            'data' => [
              'title' => 'What is your Date of Birth?',
              'body' => '',
            ],               
            'linker' => [                  
              'type' => 'text',
              'to' => 62              
            ]
          ],
          [
            'tree_id' => $trees['ga'],
            'identifier' => 62,
            'data' => [
              'title' => 'What is your Height?',
              'body' => '',
            ],               
            'linker' => [                  
              'type' => 'text',
              'to' => 63              
            ]
          ],
          [
            'tree_id' => $trees['ga'],
            'identifier' => 63,
            'data' => [
              'title' => 'What is your Weight?',
              'body' => '',
            ],               
            'linker' => [                  
              'type' => 'text',
              'to' => 64              
            ]
          ],
          [
            'tree_id' => $trees['ga'],
            'identifier' => 64,
            'data' => [
              'title' => 'Thank You for your response.',
              'body' => '',
            ],               
            'linker' => [                  
              'type' => 'terminal',
              'to' => null              
            ]
          ]
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
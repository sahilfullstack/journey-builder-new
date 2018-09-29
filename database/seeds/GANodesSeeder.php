<?php

use Illuminate\Database\Seeder;
use App\Models\{Tree, Node, Section};

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

        $sections = [
            'SELF ASSESSMENT OF HEALTH' => Section::whereTitle('SELF ASSESSMENT OF HEALTH')->first()->id,
            'NUTRITION'                 => Section::whereTitle('NUTRITION')->first()->id,
            'LIFESTYLE'                 => Section::whereTitle('LIFESTYLE')->first()->id,
            'SLEEP'                     => Section::whereTitle('SLEEP')->first()->id,
            'PHYSICAL ACTIVITY'         => Section::whereTitle('PHYSICAL ACTIVITY')->first()->id,
            'PHYSICAL FEATURES'         => Section::whereTitle('PHYSICAL FEATURES')->first()->id,
            'EMOTIONAL WELLBEING'       => Section::whereTitle('EMOTIONAL WELLBEING')->first()->id,
            'GYNAECOLOGICAL HISTORY'    => Section::whereTitle('GYNAECOLOGICAL HISTORY')->first()->id,
            'MEDICAL HISTORY'           => Section::whereTitle('MEDICAL HISTORY')->first()->id,
            'PERSONAL'                  => Section::whereTitle('PERSONAL')->first()->id
        ];

        $nodes = [
            [
              'tree_id' => $trees['ga'],
              'section_id' => $sections['SELF ASSESSMENT OF HEALTH'],
              'identifier' => 1,
              'data' => [
                'title' => 'I consider myself to be',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Mostly Healthy',
                        'description' => 'general feeling of wellbeing, no chronic disorder, 1 – 2 visit to the doctor/ year'
                    ],
                    'to' => 2,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Usually Healthy, falling sick occasionally',
                        'description' => 'once in 3-4 months'
                    ],
                    'to' => 2,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Falling sick frequently',
                        'description' => 'more than once a month to every month'
                    ],
                    'to' => 2,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Chronically ill',
                        'description' => 'suffering from chronic disorder, general feeling of being ill, frequent visits to doctor'
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
              'section_id' => $sections['NUTRITION'],
              'data' => [
                'title' => 'My diet includes',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_many',
                'minimum' => 1,
                'maximum' => 8,
                'to' => 3,
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Chicken',
                        'description' => null
                    ],
                    'to' => 3,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Dairy Products',
                        'description' => 'Dairy products are Butter milk, Butter, Cheese, Cream, Curd, Ghee, Milk Ice creams, Milk, Paneer, Whey, Yogurt.'
                    ],
                    'to' => 3,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Egg',
                        'description' => null
                    ],
                    'to' => 3,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Fish',
                        'description' => null
                    ],
                    'to' => 3,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Fruits',
                        'description' => null
                    ],
                    'to' => 3,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'Meat (Red Meat)',
                        'description' => null
                    ],
                    'to' => 3,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Vegetables',
                        'description' => null
                    ],
                    'to' => 3,
                    'operations' => []                   
                  ],       
                  [
                    'data' => [
                        'text' => 'Wheat',
                        'description' => null
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
              'section_id' => $sections['NUTRITION'],
              'data' => [
                'title' => 'My appetite is',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Average',
                        'description' => 'Eat meals but could be better'
                    ],
                    'to' => 4,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Erratic',
                        'description' => 'no fixed time/routine of meals, frequent hunger'
                    ],
                    'to' => 4,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Good',
                        'description' => 'Eat meals and feel satisfied'
                    ],
                    'to' => 4,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Poor',
                        'description' => 'Do not feel like eating most meals'
                    ],
                    'to' => 4,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Small',
                        'description' => 'Eat fixed but small portions of meals'
                    ],
                    'to' => 4,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Excessive',
                        'description' => 'Eat meals but large portions'
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
              'section_id' => $sections['NUTRITION'],
              'data' => [
                'title' => 'My water consumption on a daily basis is',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => '4 or less glasses',
                        'description' => null
                    ],
                    'to' => 5,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => '5-8 glasses',
                        'description' => null
                    ],
                    'to' => 5,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'More than 8 glasses',
                        'description' => null
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
              'section_id' => $sections['NUTRITION'],              
              'data' => [
                'title' => 'The drinks I tend to enjoy every day are',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_many',
                'minimum' => 1,
                'maximum' => 9,
                'to' => 6,
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Aerated drinks',
                        'description' => null
                    ],
                    'to' => 6,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Coffee',
                        'description' => null
                    ],
                    'to' => 6,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'Energy Drinks',
                        'description' => null
                    ],
                    'to' => 6,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Fruit juice – Fresh',
                        'description' => null
                    ],
                    'to' => 6,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Fruit juice – Canned',
                        'description' => null
                    ],
                    'to' => 6,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Green Tea',
                        'description' => null
                    ],
                    'to' => 6,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Milk',
                        'description' => null
                    ],
                    'to' => 6,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Regular Tea',
                        'description' => null
                    ],
                    'to' => 6,
                    'operations' => []                   
                  ],                   
                  [
                    'data' => [
                        'text' => 'None',
                        'description' => null
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
              'section_id' => $sections['NUTRITION'],
              'data' => [
                'title' => 'The kinds of food I mostly enjoy are',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_many',
                'minimum' => 1,
                'maximum' => 5,
                'to' => 7,
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Fried',
                        'description' => null
                    ],
                    'to' => 7,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Salty',
                        'description' => null
                    ],
                    'to' => 7,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Sour',
                        'description' => null
                    ],
                    'to' => 7,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Spicy',
                        'description' => null
                    ],
                    'to' => 7,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Sugary',
                        'description' => null
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
              'section_id' => $sections['NUTRITION'],              
              'data' => [
                'title' => 'My digestion is',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Quick',
                        'description' => 'Hunger too soon after a meal'
                    ],
                    'to' => 8,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Slow',
                        'description' => 'Feeling of fullness for hours after meal'
                    ],
                    'to' => 8,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Balanced',
                        'description' => 'Hunger at meal times'
                    ],
                    'to' => 8,
                    'operations' => []                   
                  ]
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 8,
              'section_id' => $sections['NUTRITION'],
              'data' => [
                'title' => 'I have frequently noticed one or more of the following symptoms in my digestive tract',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_many',
                'minimum' => 1,
                'maximum' => 5,
                'to' => 9,
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Acidity',
                        'description' => null
                    ],
                    'to' => 9,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Bloating',
                        'description' => null
                    ],
                    'to' => 9,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'Eructation (Burps)',
                        'description' => null
                    ],
                    'to' => 9,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Flatulence (Passing Gas)',
                        'description' => null
                    ],
                    'to' => 9,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'None',
                        'description' => null
                    ],
                    'to' => 9,
                    'operations' => []                   
                  ]                 
                ]                  
              ]
            ],    
            [
              'tree_id' => $trees['ga'],
              'identifier' => 9,
              'section_id' => $sections['NUTRITION'],              
              'data' => [
                'title' => 'My bowel movements are',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Regular, once a day',
                        'description' => 'satisfactory, well formed stools, morning'
                    ],
                    'to' => 10,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => ' Irregular, not every day',
                        'description' => 'skipping day, can be hard stools'
                    ],
                    'to' => 10,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Ineffectual, Frequent urge during the day',
                        'description' => 'Frequent, unsatisfactory soft or semi solid stools'
                    ],
                    'to' => 10,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Loose motions generally',
                        'description' => 'semi solid stools, with no fever'
                    ],
                    'to' => 10,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Every day, but no fixed time',
                        'description' => 'well-formed stools, any time of the day'
                    ],
                    'to' => 10,
                    'operations' => []                   
                  ]
                ]                  
              ]
            ],   
            [
              'tree_id' => $trees['ga'],
              'identifier' => 10,
              'section_id' => $sections['LIFESTYLE'],
              'data' => [
                'title' => 'I eat out',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Almost Daily',
                        'description' => null
                    ],
                    'to' => 11,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => '1-3 times a week',
                        'description' => null
                    ],
                    'to' => 11,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'once or twice a month',
                        'description' => null
                    ],
                    'to' => 11,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Rarely',
                        'description' => null
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
              'section_id' => $sections['LIFESTYLE'],
              'data' => [
                'title' => 'My alcohol intake is',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Never',
                        'description' => null
                    ],
                    'to' => 12,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Every day',
                        'description' => '1 drink/day'
                    ],
                    'to' => 12,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Socially',
                        'description' => '1-2 drink/occasion'
                    ],
                    'to' => 12,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Heavy',
                        'description' => 'more than 4 drinks/occasion'
                    ],
                    'to' => 12,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Not Anymore',
                        'description' => 'quit more than 6 months ago',
                    ],
                    'to' => 12,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Not Anymore',
                        'description' => 'quit less than 6 months ago',
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
              'section_id' => $sections['LIFESTYLE'],
              'data' => [
                'title' => 'I smoke',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Never',
                        'description' => null,
                    ],
                    'to' => 13,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Everyday',
                        'description' => 'less than 5 cigarettes',
                    ],
                    'to' => 13,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Everyday',
                        'description' => 'more than 5 cigarettes',
                    ],
                    'to' => 13,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Socially',
                        'description' => '1-2 / week',
                    ],
                    'to' => 13,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Not anymore',
                        'description' => 'Quit more than 1 year ago',
                    ],
                    'to' => 13,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Not anymore',
                        'description' => 'Quit less than 1 year ago',
                    ],
                    'to' => 13,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Other Tobacco products',
                        'description' => 'Hukkah, Paan etc.',
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
              'section_id' => $sections['LIFESTYLE'],
              'data' => [
                'title' => 'I access my social media networks (Facebook, WhatsApp, Instagram, Snapchat etc.)',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Not every day',
                        'description' => null,
                    ],
                    'to' => 14,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Once a day',
                        'description' => null,
                    ],
                    'to' => 14,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => '2-5 times a day',
                        'description' => null,
                    ],
                    'to' => 14,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => '10+ times',
                        'description' => null,
                    ],
                    'to' => 14,
                    'operations' => []                   
                  ],
                  
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 14,
              'section_id' => $sections['SLEEP'],
              'data' => [
                'title' => 'My sleep pattern is',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Difficult falling and staying asleep',
                        'description' => null,
                    ],
                    'to' => 15,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Sleep well for an average length of time',
                        'description' => null,
                    ],
                    'to' => 15,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Sleep is long, sound and difficulty waking up',
                        'description' => null,
                    ],
                    'to' => 15,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Interrupted sleep',
                        'description' => null,
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
              'section_id' => $sections['SLEEP'],
              'data' => [
                'title' => 'I wake up feeling refreshed',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Yes',
                        'description' => null,
                    ],
                    'to' => 16,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'No',
                        'description' => null,
                    ],
                    'to' => 16,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Sometimes',
                        'description' => null,
                    ],
                    'to' => 16,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Mostly',
                        'description' => null,
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
              'section_id' => $sections['SLEEP'],
              'data' => [
                'title' => 'My dreams are',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Absent',
                        'description' => null,
                    ],
                    'to' => 17,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Nightmares',
                        'description' => null,
                    ],
                    'to' => 17,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Pleasant',
                        'description' => null,
                    ],
                    'to' => 17,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Vivid',
                        'description' => null,
                    ],
                    'to' => 17,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Don\'t remember',
                        'description' => null,
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
              'section_id' => $sections['SLEEP'],
              'data' => [
                'title' => 'Before going to sleep, I switch off',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Music',
                        'description' => null,
                    ],
                    'to' => 18,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Phone',
                        'description' => null,
                    ],
                    'to' => 18,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'TV',
                        'description' => null,
                    ],
                    'to' => 18,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Wi-Fi',
                        'description' => null,
                    ],
                    'to' => 18,
                    'operations' => []                   
                  ],                   
                  [
                    'data' => [
                        'text' => 'All',
                        'description' => null,
                    ],
                    'to' => 18,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'None',
                        'description' => null,
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
              'section_id' => $sections['PHYSICAL ACTIVITY'],
              'data' => [
                'title' => 'I engage in Exercise/Physical activity',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Daily',
                        'description' => null,
                    ],
                    'to' => 19,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => '1-2 Times a week',
                        'description' => null,
                    ],
                    'to' => 19,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => '3-4 times a week',
                        'description' => null,
                    ],
                    'to' => 19,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Never',
                        'description' => null,
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
              'section_id' => $sections['PHYSICAL ACTIVITY'],
              'data' => [
                'title' => 'What form of physical activity you engage in?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_many',
                'minimum' => 1,
                'maximum' => 12,
                'to' => 20,
                'selectables' => [                  
                  [
                    'data' => [
                        'text' => 'Active moment at work or home',
                        'description' => null,
                    ],
                    'to' => 20,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'Aerobics',
                        'description' => null,
                    ],
                    'to' => 20,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Cycling',
                        'description' => null,
                    ],
                    'to' => 20,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Gym',
                        'description' => null,
                    ],
                    'to' => 20,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Jogging',
                        'description' => null,
                    ],
                    'to' => 20,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Running',
                        'description' => null,
                    ],
                    'to' => 20,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Swimming',
                        'description' => null,
                    ],
                    'to' => 20,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Walking',
                        'description' => null,
                    ],
                    'to' => 20,
                    'operations' => []                   
                  ],   
                   [
                    'data' => [
                        'text' => 'Yoga',
                        'description' => null,
                    ],
                    'to' => 20,
                    'operations' => []                   
                  ],  
                   [
                    'data' => [
                        'text' => 'Zumba',
                        'description' => null,
                    ],
                    'to' => 20,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'None',
                        'description' => null,
                    ],
                    'to' => 20,
                    'operations' => []                   
                  ]                
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 20,
              'section_id' => $sections['PHYSICAL FEATURES'],
              'data' => [
                'title' => 'My built is best described as',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_many',
                'minimum' => 1,
                'maximum' => 8,
                'to' => 21,
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Bony',
                        'description' => null,
                    ],
                    'to' => 21,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Flexible',
                        'description' => null,
                    ],
                    'to' => 21,
                    'operations' => []                
                  ],           
                  [
                    'data' => [
                        'text' => 'Lean',
                        'description' => null,
                    ],
                    'to' => 21,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Muscular',
                        'description' => null,
                    ],
                    'to' => 21,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Maintained weight',
                        'description' => null,
                    ],
                    'to' => 21,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Obese',
                        'description' => null,
                    ],
                    'to' => 21,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Tendency to gain weight easily',
                        'description' => null,
                    ],
                    'to' => 21,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Tendency to lose weight easily',
                        'description' => null,
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
              'section_id' => $sections['PHYSICAL FEATURES'],
              'data' => [
                'title' => 'My Skin texture is',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Dry',
                        'description' => null,
                    ],
                    'to' => 22,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Normal',
                        'description' => null,
                    ],
                    'to' => 22,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Oily',
                        'description' => null,
                    ],
                    'to' => 22,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Rough',
                        'description' => null,
                    ],
                    'to' => 22,
                    'operations' => []                   
                  ],              
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 22,
              'section_id' => $sections['PHYSICAL FEATURES'],
              'data' => [
                'title' => 'My complexion is',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Dark',
                        'description' => null,
                    ],
                    'to' => 23,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Fair',
                        'description' => null,
                    ],
                    'to' => 23,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Pale',
                        'description' => null,
                    ],
                    'to' => 23,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Pinkish',
                        'description' => null,
                    ],
                    'to' => 23,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Wheatish',
                        'description' => null,
                    ],
                    'to' => 23,
                    'operations' => []                   
                  ],             
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 23,
              'section_id' => $sections['PHYSICAL FEATURES'],
              'data' => [
                'title' => 'My Hair quality can be described by',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Breakage',
                        'description' => null,
                    ],
                    'to' => 24,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Dandruff',
                        'description' => null,
                    ],
                    'to' => 24,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'Dry',
                        'description' => null,
                    ],
                    'to' => 24,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Frizzy',
                        'description' => null,
                    ],
                    'to' => 24,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Falling',
                        'description' => null,
                    ],
                    'to' => 24,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Oily',
                        'description' => null,
                    ],
                    'to' => 24,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Premature greying',
                        'description' => null,
                    ],
                    'to' => 24,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Rough',
                        'description' => null,
                    ],
                    'to' => 24,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Soft',
                        'description' => null,
                    ],
                    'to' => 24,
                    'operations' => []                   
                  ],                 
                ]                  
              ]
            ],            
            [
              'tree_id' => $trees['ga'],
              'identifier' => 24,
              'section_id' => $sections['PHYSICAL FEATURES'],
              'data' => [
                'title' => 'I generally',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Feel hot easily',
                        'description' => null,
                    ],
                    'to' => 25,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Feel cold easily',
                        'description' => null,
                    ],
                    'to' => 25,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Am Not sensitive to hot or cold',
                        'description' => null,
                    ],
                    'to' => 25,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Prefer cold things',
                        'description' => null,
                    ],
                    'to' => 25,
                    'operations' => []                   
                  ],     
                  [
                    'data' => [
                        'text' => 'Prefer hot things',
                        'description' => null,
                    ],
                    'to' => 25,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Am Sensitive to hot or cold',
                        'description' => null,
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
              'section_id' => $sections['EMOTIONAL WELLBEING'],
              'data' => [
                'title' => 'My current stress levels are',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Zero',                        
                        'description' => null
                    ],
                    'to' => 26,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Low',
                        'description' => null
                    ],
                    'to' => 26,
                    'operations' => []                   
                  ],                             
                  [
                    'data' => [
                        'text' => 'Moderate',
                        'description' => null
                    ],
                    'to' => 26,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'High',
                        'description' => null
                    ],
                    'to' => 26,
                    'operations' => []                   
                  ],
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 26,
              'section_id' => $sections['EMOTIONAL WELLBEING'],
              'data' => [
                'title' => 'My source of current stress includes',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_many',
                'minimum' => 1,
                'maximum' => 8,
                'to' => 27,
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Colleagues',
                        'description' => null
                    ],
                    'to' => 27,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Financial',
                        'description' => null
                    ],
                    'to' => 27,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Family',
                        'description' => null
                    ],
                    'to' => 27,
                    'operations' => []                   
                  ],
                   [
                    'data' => [
                        'text' => 'Friends',
                        'description' => null
                    ],
                    'to' => 27,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Grief',
                        'description' => null
                    ],
                    'to' => 27,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Health',
                        'description' => null
                    ],
                    'to' => 27,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Job',
                        'description' => null
                    ],
                    'to' => 27,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Relationship',
                        'description' => null
                    ],
                    'to' => 27,
                    'operations' => []                   
                  ],                              
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 27,
              'section_id' => $sections['EMOTIONAL WELLBEING'],
              'data' => [
                'title' => 'My overall emotional state has been affected by a major incidence/grief/stress',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Yes',
                        'description' => null
                    ],
                    'to' => 28,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'No',
                        'description' => null
                    ],
                    'to' => 29,
                    'operations' => []                   
                  ],
                   
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 28,
              'section_id' => $sections['EMOTIONAL WELLBEING'],
              'data' => [
                'title' => 'Specify incident/ grief/ stress/ that has had an impact on your overall emotional state.',
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
              'section_id' => $sections['EMOTIONAL WELLBEING'],
              'data' => [
                'title' => 'I tend to',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Make friends easily',
                        'description' => null
                    ],
                    'to' => 30,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Like to stay alone',
                        'description' => null
                    ],
                    'to' => 30,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Initially reserved',
                        'description' => null
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
              'section_id' => $sections['EMOTIONAL WELLBEING'],
              'data' => [
                'title' => 'When things don’t go according to my wish, I tend to',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Get Angry & yell',
                        'description' => null
                    ],
                    'to' => 31,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Get angry & bottle up',
                        'description' => null
                    ],
                    'to' => 31,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Cry',
                        'description' => null
                    ],
                    'to' => 31,
                    'operations' => []                   
                  ],                    
                  [
                    'data' => [
                        'text' => 'Dont bother',
                        'description' => null
                    ],
                    'to' => 31,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Feel bad but keep quite',
                        'description' => null
                    ],
                    'to' => 31,
                    'operations' => []                   
                  ],                 
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 31,
              'section_id' => $sections['EMOTIONAL WELLBEING'],
              'data' => [
                'title' => 'Which of the following describe my present state of personality the best?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_many',
                'minimum' => 1,
                'maximum' => 24,
                'to' => 32,
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Anxious',
                        'description' => null
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Aggressive',
                        'description' => null
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Calm',
                        'description' => null
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Careless',
                        'description' => null
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Cheerful',
                        'description' => null
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Clingy',
                        'description' => null
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Confident',
                        'description' => null
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Creative',
                        'description' => null
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Critical',
                        'description' => null
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Depressed',
                        'description' => null
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'Dominating',
                        'description' => null
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Excitable',
                        'description' => null
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Fearful',
                        'description' => null
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Headstrong',
                        'description' => null
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Imaginative',
                        'description' => null
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Insecure',
                        'description' => null
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Irritable',
                        'description' => null
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ],                 
                  [
                    'data' => [
                        'text' => 'Jealous',
                        'description' => null
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Mild',
                        'description' => null
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'Nervous',
                        'description' => null
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Organized',
                        'description' => null
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Perfectionist',
                        'description' => null
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Reserved',
                        'description' => null
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Timid',
                        'description' => null
                    ],
                    'to' => 32,
                    'operations' => []                   
                  ]
                ]
              ]              
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 32,
              'section_id' => $sections['EMOTIONAL WELLBEING'],
              'data' => [
                'title' => 'My thought pattern on most days is',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Erratic',
                        'description' => null
                    ],
                    'to' => 33,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Normal',
                        'description' => null
                    ],
                    'to' => 33,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Negative',
                        'description' => null
                    ],
                    'to' => 33,
                    'operations' => []                   
                  ],   
                   [
                    'data' => [
                        'text' => 'Obsessive',
                        'description' => null
                    ],
                    'to' => 33,
                    'operations' => []                   
                  ]            
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 33,
              'section_id' => $sections['EMOTIONAL WELLBEING'],
              'data' => [
                'title' => 'When upset, I',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'like to share my stress with someone',
                        'description' => null
                    ],
                    'to' => 34,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'tend to bottle it up & keep thinking about it',
                        'description' => null
                    ],
                    'to' => 34,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'manage on my own & move on',
                        'description' => null
                    ],
                    'to' => 34,
                    'operations' => []                   
                  ]              
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 34,
              'section_id' => $sections['EMOTIONAL WELLBEING'],
              'data' => [
                'title' => 'In the past 3 months, I have often felt low, depressed or sad',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Never',
                        'description' => null
                    ],
                    'to' => 35,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Nearly Every day',
                        'description' => null
                    ],
                    'to' => 35,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Several Days in a month',
                        'description' => null
                    ],
                    'to' => 35,
                    'operations' => []                   
                  ]              
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 35,
              'section_id' => $sections['EMOTIONAL WELLBEING'],
              'data' => [
                'title' => 'In the past 3 months , I have anxiety attacks',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Never',
                        'description' => null
                    ],
                    'to' => 36,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Nearly Every day',
                        'description' => null
                    ],
                    'to' => 36,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Several Days in a month',
                        'description' => null
                    ],
                    'to' => 36,
                    'operations' => []                   
                  ]              
                ]                  
              ]
            ], 
            [
              'tree_id' => $trees['ga'],
              'identifier' => 36,
              'section_id' => $sections['EMOTIONAL WELLBEING'],
              'data' => [
                'title' => 'In the past 3 months , I have thoughts of harming myself',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Never',
                        'description' => null
                    ],
                    'to' => 37,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Nearly Every day',
                        'description' => null
                    ],
                    'to' => 37,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Several Days in a month',
                        'description' => null
                    ],
                    'to' => 37,
                    'operations' => []                   
                  ]              
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 37,
              'section_id' => $sections['EMOTIONAL WELLBEING'],
              'data' => [
                'title' => 'I fear',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_many',
                'minimum' => 1,
                'maximum' => 5,
                'to' => 38,
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Animal',
                        'description' => null
                    ],
                    'to' => 38,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Darkness',
                        'description' => null
                    ],
                    'to' => 38,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'Height',
                        'description' => null
                    ],
                    'to' => 38,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Incurable Disease',
                        'description' => null
                    ],
                    'to' => 38,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Water',
                        'description' => null
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
              'section_id' => $sections['EMOTIONAL WELLBEING'],
              'data' => [
                'title' => 'I am particular about',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_many',
                'minimum' => 1,
                'maximum' => 6,
                'to' => 39,
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Order',
                        'description' => null
                    ],
                    'to' => 39,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Cleanliness',
                        'description' => null
                    ],
                    'to' => 39,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'Personal appearance',
                        'description' => null
                    ],
                    'to' => 39,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Spending money',
                        'description' => null
                    ],
                    'to' => 39,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Time',
                        'description' => null
                    ],
                    'to' => 39,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'None',
                        'description' => null
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
              'section_id' => $sections['GYNAECOLOGICAL HISTORY'],
              'data' => [
                'title' => 'My memory is',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Average',
                        'description' => 'can recollect short & long term memories with efforts',
                    ],
                    'to' => 40,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Good',
                        'description' => 'can recollect short & long term memories without efforts',
                    ],
                    'to' => 40,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Poor',
                        'description' => 'cannot recollect short & long term memories easily',
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
              'section_id' => $sections['GYNAECOLOGICAL HISTORY'],
              'data' => [
                'title' => 'I began my menses cycle at the age of',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'number',
                'to' => 41              
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 41,
              'section_id' => $sections['GYNAECOLOGICAL HISTORY'],
              'data' => [
                'title' => 'My menstrual cycle is',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Regular',
                        'description' => null
                    ],
                    'to' => 42,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Irregular',
                    'description' => null],

                    'to' => 42,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Stopped',
                    'description' => null],

                    'to' => 42,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Absent',
                    'description' => null],

                    'to' => 43,
                    'operations' => []                   
                  ],              
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 42,
              'section_id' => $sections['GYNAECOLOGICAL HISTORY'],
              'data' => [
                'title' => 'Usually my menstrual flow is',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_many',
                'minimum' => 1,
                'maximum' => 4,
                'to' => 43,
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Light',
                    'description' => null],

                    'to' => 43,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Moderate',
                    'description' => null],

                    'to' => 43,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'Heavy',
                    'description' => null],

                    'to' => 43,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'With clots',
                    'description' => null],

                    'to' => 43,
                    'operations' => []                   
                  ],                             
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 43,
              'section_id' => $sections['GYNAECOLOGICAL HISTORY'],
              'data' => [
                'title' => 'I frequently experience one or more of the following symptoms before or during menses?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_many',
                'minimum' => 1,
                'maximum' => 14,
                'to' => 44,
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Back Pain',
                    'description' => null],

                    'to' => 44,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Bloating',
                    'description' => null],

                    'to' => 44,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'Breast Tenderness',
                    'description' => null],

                    'to' => 44,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Change In appetites',
                    'description' => null],

                    'to' => 44,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Constipation',
                    'description' => null],

                    'to' => 44,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Cramps',
                    'description' => null],

                    'to' => 44,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Depression',
                    'description' => null],

                    'to' => 44,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Diarrhea',
                    'description' => null],

                    'to' => 44,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Fatigue',
                    'description' => null],

                    'to' => 44,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Headache',
                    'description' => null],

                    'to' => 44,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Insomnia',
                    'description' => null],

                    'to' => 44,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Irritability',
                    'description' => null],

                    'to' => 44,
                    'operations' => []                   
                  ],                 
                  [
                    'data' => [
                        'text' => 'Nausea',
                    'description' => null],

                    'to' => 44,
                    'operations' => []                   
                  ],    
                  [
                    'data' => [
                        'text' => 'Palpitation',
                    'description' => null],

                    'to' => 44,
                    'operations' => []                   
                  ],               
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 44,
              'section_id' => $sections['GYNAECOLOGICAL HISTORY'],
              'data' => [
                'title' => 'I have noticed lumps or swelling in my breasts',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Yes',
                    'description' => null],

                    'to' => 45,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'No',
                    'description' => null],

                    'to' => 45,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Not sure',
                    'description' => null],

                    'to' => 45,
                    'operations' => []                   
                  ],  
                           
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 45,
              'section_id' => $sections['GYNAECOLOGICAL HISTORY'],
              'data' => [
                'title' => 'I have white discharge complaint',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Yes',
                    'description' => null],

                    'to' => 46,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'No',
                    'description' => null],

                    'to' => 46,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Throughout the month',
                    'description' => null],

                    'to' => 46,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Before menses',
                    'description' => null],

                    'to' => 46,
                    'operations' => []                   
                  ],     
                  [
                    'data' => [
                        'text' => 'After menses',
                    'description' => null],

                    'to' => 46,
                    'operations' => []                   
                  ],            
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 46,
              'section_id' => $sections['GYNAECOLOGICAL HISTORY'],
              'data' => [
                'title' => 'I have the following urinary complaints',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [                  
                  [
                    'data' => [
                        'text' => 'Burning',
                    'description' => null],

                    'to' => 47,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Increased frequency',
                    'description' => null],

                    'to' => 47,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Incontinence',
                    'description' => null],

                    'to' => 47,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Involuntary',
                    'description' => null],

                    'to' => 47,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Foul - Smelling',
                    'description' => null],

                    'to' => 47,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Painful',
                    'description' => null],

                    'to' => 47,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Urgency',
                    'description' => null],

                    'to' => 47,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'None',
                    'description' => null],

                    'to' => 47,
                    'operations' => []                   
                  ],        
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 47,
              'section_id' => $sections['GYNAECOLOGICAL HISTORY'],
              'data' => [
                'title' => 'I am sexually active',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Yes',
                    'description' => null],

                    'to' => 48,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'No',
                    'description' => null],

                    'to' => 49,
                    'operations' => []                   
                  ],
                             
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 48,
              'section_id' => $sections['GYNAECOLOGICAL HISTORY'],
              'data' => [
                'title' => 'I experience the following symptoms',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Difficulty achieving an orgasm',
                    'description' => null],

                    'to' => 49,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Difficulty becoming aroused',
                    'description' => null],

                    'to' => 49,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Lack of interest',
                    'description' => null],

                    'to' => 49,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Lack of lubrication',
                    'description' => null],

                    'to' => 49,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Pain or discomfort during sexual activity',
                    'description' => null],

                    'to' => 49,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'None',
                    'description' => null],

                    'to' => 49,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'All',
                    'description' => null],

                    'to' => 49,
                    'operations' => []                   
                  ]            
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 49,
              'section_id' => $sections['GYNAECOLOGICAL HISTORY'],
              'data' => [
                'title' => 'Since I am in pre/ post menopause, I frequently experience one or more of the following symptoms',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Not Applicable',
                    'description' => null],

                    'to' => 50,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Change in libido',
                    'description' => null],

                    'to' => 50,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Excess Sweating',
                    'description' => null],

                    'to' => 50,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Fatigue',
                    'description' => null],

                    'to' => 50,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Hot  flushes',
                    'description' => null],

                    'to' => 50,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Insomnia',
                    'description' => null],

                    'to' => 50,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Mood swings',
                    'description' => null],

                    'to' => 50,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Vagina dryness',
                    'description' => null],

                    'to' => 50,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Weight gain',
                    'description' => null],

                    'to' => 50,
                    'operations' => []                   
                  ]            
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 50,
              'section_id' => $sections['GYNAECOLOGICAL HISTORY'],
              'data' => [
                'title' => 'I think I might be pregnant',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Yes',
                    'description' => null],

                    'to' => 51,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'No',
                    'description' => null],

                    'to' => 51,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Not Applicable',
                    'description' => null],

                    'to' => 51,
                    'operations' => []                   
                  ],                            
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 51,
              'section_id' => $sections['GYNAECOLOGICAL HISTORY'],
              'data' => [
                'title' => 'I have had deliveries',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Yes',
                    'description' => null],

                    'to' => 52,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'No',
                    'description' => null],

                    'to' => 53,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Not Applicable',
                    'description' => null],

                    'to' => 53,
                    'operations' => []                   
                  ],                            
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 52,
              'section_id' => $sections['GYNAECOLOGICAL HISTORY'],
              'data' => [
                'title' => 'Number of deliveries',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'number',
                'to' => 53          
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 53,
              'section_id' => $sections['GYNAECOLOGICAL HISTORY'],
              'data' => [
                'title' => 'I have had abortions',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Yes',
                    'description' => null],

                    'to' => 54,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'No',
                    'description' => null],

                    'to' => 55,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Not Applicable',
                    'description' => null],

                    'to' => 55,
                    'operations' => []                   
                  ],                            
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 54,
              'section_id' => $sections['GYNAECOLOGICAL HISTORY'],
              'data' => [
                'title' => 'Number of abortions',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'number',
                'to' => 55          
              ]
            ],


            [
              'tree_id' => $trees['ga'],
              'identifier' => 55,
              'section_id' => $sections['MEDICAL HISTORY'],
              'data' => [
                'title' => 'Do I have any history of medical illness?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Yes',
                    'description' => null],

                    'to' => 56,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'No',
                    'description' => null],

                    'to' => 57,
                    'operations' => []                   
                  ],                 
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 56,
              'section_id' => $sections['MEDICAL HISTORY'],
              'data' => [
                'title' => 'Specify history of any medical illness?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'text',
                'to' => 57             
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 57,
              'section_id' => $sections['MEDICAL HISTORY'],
              'data' => [
                'title' => 'My current medical conditions include',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Arthritis',
                    'description' => null],

                    'to' => 59,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Diabetes',
                    'description' => null],

                    'to' => 59,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Hypertension',
                    'description' => null],

                    'to' => 59,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'PCOD',
                    'description' => null],

                    'to' => 59,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Thyroid',
                    'description' => null],

                    'to' => 59,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Others',
                    'description' => null],

                    'to' => 58,
                    'operations' => []                   
                  ],      
              ]
            ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 58,
              'section_id' => $sections['MEDICAL HISTORY'],
              'data' => [
                'title' => 'Please Specify your medical condition?',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'text',
                'to' => 59             
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 59,
              'section_id' => $sections['MEDICAL HISTORY'],
              'data' => [
                'title' => 'I am allergic to',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Drug',
                    'description' => null],

                    'to' => 60,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Dust',
                    'description' => null],

                    'to' => 60,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Egg',
                    'description' => null],

                    'to' => 60,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Fish',
                    'description' => null],

                    'to' => 60,
                    'operations' => []                   
                  ],    
                   [
                    'data' => [
                        'text' => 'Milk(lactose)',
                    'description' => null],

                    'to' => 60,
                    'operations' => []                   
                  ],                      
                  [
                    'data' => [
                        'text' => 'Nuts',
                    'description' => null],

                    'to' => 60,
                    'operations' => []                   
                  ],                      
                  [
                    'data' => [
                        'text' => 'Pollen',
                    'description' => null],

                    'to' => 60,
                    'operations' => []                   
                  ],                      
                  [
                    'data' => [
                        'text' => 'Soy',
                    'description' => null],

                    'to' => 60,
                    'operations' => []                   
                  ],                      
                  [
                    'data' => [
                        'text' => 'Wheat(Gluten)',
                    'description' => null],

                    'to' => 60,
                    'operations' => []                   
                  ],   
                   [
                    'data' => [
                        'text' => 'Nono',
                    'description' => null],

                    'to' => 60,
                    'operations' => []                   
                  ],   
                   [
                    'data' => [
                        'text' => 'Don’t know',
                    'description' => null],

                    'to' => 60,
                    'operations' => []                   
                  ],                  
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 60,
              'section_id' => $sections['MEDICAL HISTORY'],
              'data' => [
                'title' => 'My direct blood* relatives have or had the following medical conditions',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_one',
                'selectables' => [
                  [
                    'data' => [
                        'text' => 'Allergies',
                    'description' => null],

                    'to' => 61,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Anxiety',
                    'description' => null],

                    'to' => 61,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Arthritis',
                    'description' => null],

                    'to' => 61,
                    'operations' => []                   
                  ],              
                  [
                    'data' => [
                        'text' => 'Autoimmune Disorder',
                    'description' => null],

                    'to' => 61,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Cancer',
                    'description' => null],

                    'to' => 61,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Diabetes',
                    'description' => null],

                    'to' => 61,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Dementia',
                    'description' => null],

                    'to' => 61,
                    'operations' => []                   
                  ],              
                  [
                    'data' => [
                        'text' => 'Depression',
                    'description' => null],

                    'to' => 61,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Heart Disease',
                    'description' => null],

                    'to' => 61,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Hyperlipidemia',
                    'description' => null],

                    'to' => 61,
                    'operations' => []                   
                  ],          
                       [
                    'data' => [
                        'text' => 'Hypertension',
                    'description' => null],

                    'to' => 61,
                    'operations' => []                   
                  ],              
                  [
                    'data' => [
                        'text' => 'Infection',
                    'description' => null],

                    'to' => 61,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Kidney Disease',
                    'description' => null],

                    'to' => 61,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Liver Disease',
                    'description' => null],

                    'to' => 61,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'Stroke',
                    'description' => null],

                    'to' => 61,
                    'operations' => []                   
                  ],              
                  [
                    'data' => [
                        'text' => 'Thyroid',
                    'description' => null],

                    'to' => 61,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Tuberculosis',
                    'description' => null],

                    'to' => 61,
                    'operations' => []                   
                  ],  
                  [
                    'data' => [
                        'text' => 'None',
                    'description' => null],

                    'to' => 61,
                    'operations' => []                   
                  ]
                ]                  
              ]
            ],
            [
              'tree_id' => $trees['ga'],
              'identifier' => 61,
              'section_id' => $sections['MEDICAL HISTORY'],
              'data' => [
                'title' => 'Currently, I am taking the following medications',
                'body' => '',
              ],               
              'linker' => [                  
                'type' => 'select_many',
                'minimum' => 1,
                'maximum' => 25,
                'to' => 62,
                'selectables' => [                 
                  [
                    'data' => [
                        'text' => 'Antacids',
                    'description' => null],

                    'to' => 62,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'Antibiotics',
                    'description' => null],

                    'to' => 62,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Anti-anxiety',
                    'description' => null],

                    'to' => 62,
                    'operations' => []                   
                  ],                  
                  [
                    'data' => [
                        'text' => 'Antidepressants',
                    'description' => null],

                    'to' => 62,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Anti-Diabetic',
                    'description' => null],

                    'to' => 62,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Anti-Fungal',
                    'description' => null],

                    'to' => 62,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Anti - Psychotic drugs',
                    'description' => null],

                    'to' => 62,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Ayurveda',
                    'description' => null],

                    'to' => 62,
                    'operations' => []                   
                  ],    
                  [
                    'data' => [
                        'text' => 'Blood pressure',
                    'description' => null],

                    'to' => 62,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Blood thinner',
                    'description' => null],

                    'to' => 62,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Herbal',
                    'description' => null],

                    'to' => 62,
                    'operations' => []                   
                  ],           
                  [
                    'data' => [
                        'text' => 'Homoeopathic',
                    'description' => null],

                    'to' => 62,
                    'operations' => []                   
                  ],
                   [
                    'data' => [
                        'text' => 'Insulin',
                    'description' => null],

                    'to' => 62,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Laxative',
                    'description' => null],

                    'to' => 62,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Multivitamins',
                    'description' => null],

                    'to' => 62,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Non- Steroid Anti-Inflammatory Drug',
                    'description' => null],

                    'to' => 62,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Oral Contraceptive',
                    'description' => null],

                    'to' => 62,
                    'operations' => []                   
                  ],   
                  [
                    'data' => [
                        'text' => 'Pain Killer',
                    'description' => null],

                    'to' => 62,
                    'operations' => []                   
                  ],       
                  [
                    'data' => [
                        'text' => 'Sleeping pills',
                    'description' => null],

                    'to' => 62,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Statin',
                    'description' => null],

                    'to' => 62,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Steroid',
                    'description' => null],

                    'to' => 62,
                    'operations' => []                   
                  ], 
                  [
                    'data' => [
                        'text' => 'Thyroid',
                    'description' => null],

                    'to' => 62,
                    'operations' => []                   
                  ],
                  [
                    'data' => [
                        'text' => 'Unani',
                    'description' => null],

                    'to' => 62,
                    'operations' => []                   
                  ], 
                   [
                    'data' => [
                        'text' => 'None',
                    'description' => null],

                    'to' => 62,
                    'operations' => []                   
                  ],                     
                ]                  
              ]
            ],
           [
            'tree_id' => $trees['ga'],
            'identifier' => 62,
            'section_id' => $sections['PERSONAL'],
            'data' => [
              'title' => 'What is your name ?',
              'body' => '',
            ],               
            'linker' => [                  
              'type' => 'full_name',
              'to' => 63              
            ]
          ],
          [
            'tree_id' => $trees['ga'],
            'identifier' => 63,
            'section_id' => $sections['PERSONAL'],
            'data' => [
              'title' => 'What is your phone number?',
              'body' => '',
            ],               
            'linker' => [                  
              'type' => 'number',
              'to' => 64              
            ]
          ],
          [
            'tree_id' => $trees['ga'],
            'identifier' => 64,
            'section_id' => $sections['PERSONAL'],
            'data' => [
              'title' => 'What is your Date of Birth?',
              'body' => '',
            ],               
            'linker' => [                  
              'type' => 'date',
              'to' => 65              
            ]
          ],
          [
            'tree_id' => $trees['ga'],
            'identifier' => 65,
            'section_id' => $sections['PERSONAL'],
            'data' => [
              'title' => 'What is your height?',
              'body' => '',
            ],               
            'linker' => [                  
              'type' => 'height',
              'to' => 66              
            ]
          ],
          [
            'tree_id' => $trees['ga'],
            'identifier' => 66,
            'section_id' => $sections['PERSONAL'],
            'data' => [
              'title' => 'What is your weight?',
              'body' => '',
            ],               
            'linker' => [                  
              'type' => 'weight',
              'to' => 67              
            ]
          ],
          [
            'tree_id' => $trees['ga'],
            'identifier' => 67,
            'section_id' => null,
            'data' => [
              'title' => 'Thank You!',
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
                  'section_id' => $node['section_id'],
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
<?php

use Illuminate\Database\Seeder;
use App\Models\Tree;
use App\Models\Node;

class AcneNodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 		$trees = [
            str_slug('Acne') => Tree::notDeleted()->whereSlug(str_slug('Acne'))->first()->id,
        ];

        $types = [
        	'decider',
        	'text_options',
        	'text_multiple_choice',
        	'image_options',
        	'image_multiple_choice',
        	'image_text_options',
        	'image_text_multiple_choice',
        	'text_input',
        	'image_input',
        	'generate_report',
        	'final'
        ];

        $nodes = [
            [
            	'identifier' => 1,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [
            		'title' => 'How old are you ?',
            		'body' => '',
            	],
                'type' => 'text_options',
                'options' => [
                	[
			            'data' => [
			                'text' => '12-17',
			            ],
			            'to' => 2,
			            'operations' => [
			                [
			                    'age_score' => [
			                        'add' => 2
			                    ]
			                ]
			            ]                		
                	],
                	[
			            'data' => [
			                'text' => '18-40',
			            ],
			            'to' => 2,
			            'operations' => [
			                [
			                    'age_score' => [
			                        'add' => 1
			                    ]
			                ]
			            ]                		
                	],
                	[
			            'data' => [
			                'text' => 'Above 40',
			            ],
			            'to' => 2,
			            'operations' => [
			                [
			                    'age_score' => [
			                        'add' => 3
			                    ]
			                ]
			            ]                		
                	],
                ],
                'decisions' => []
            ],
            [
            	'identifier' => 2,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [
            		'title' => 'For how long have you had acne?',
            		'body' => '',
            	],
                'type' => 'text_options',
                'options' => [
                	[
			            'data' => [
			                'text' => 'Less than 6 months',
			            ],
			            'to' => 3 ,
			            'operations' => []                		
                	],
                	[
			            'data' => [
			                'text' => '6 months - 2 years',
			            ],
			            'to' => 3,
			            'operations' => []                		
                	],
                	[
			            'data' => [
			                'text' => 'More than 2 years',
			            ],
			            'to' => 3,
			            'operations' => []                		
                	],
                ],
                'decisions' => []
            ],
            [
            	'identifier' => 3,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [
            		'title' => 'Have you tried any treatment for a significant (at least a month or more) period of time? (Multiple Choice can be selected)',
            		'body' => '',
            	],
                'type' => 'text_multiple_choice',
                'options' => [
                	[
			            'data' => [
			                'text' => 'Allopathy Pills',
			            ],
			            'to' => 4,
			            'operations' => []                		
                	],
                	[
			            'data' => [
			                'text' => 'Topical Creams',
			            ],
			            'to' => 4,
			            'operations' => []                		
                	],
                	[
			            'data' => [
			                'text' => 'Naturopathy',
			            ],
			            'to' => 4,
			            'operations' => []                		
                	],                	
                	[
			            'data' => [
			                'text' => 'Homeopathy',
			            ],
			            'to' => 4,
			            'operations' => []                		
                	],
                	[
			            'data' => [
			                'text' => 'Ayurvedic',
			            ],
			            'to' => 4,
			            'operations' => []                		
                	],                	
                	[
			            'data' => [
			                'text' => 'Nothing',
			            ],
			            'to' => 4,
			            'operations' => []                		
                	],                	
                ],
                'decisions' => []
            ],
            [
            	'identifier' => 4,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [
            		'title' => 'Do you have sensitive skin?',
            		'body' => '',
            	],
                'type' => 'text_options',
                'options' => [
                	[
			            'data' => [
			                'text' => 'Yes',
			            ],
			            'to' => 5,
			            'operations' => [
			                [
			                    'skin_score' => [
			                        'add' => 3
			                    ]
			                ]
			            ]                		
                	],
                	[
			            'data' => [
			                'text' => 'No',
			            ],
			            'to' => 5,
			            'operations' => [
			                [
			                    'skin_score' => [
			                        'add' => 1
			                    ]
			                ]
			            ]                		
                	],
                	[
			            'data' => [
			                'text' => 'I Don\'t Know',
			            ],
			            'to' => 5,
			            'operations' => [
			                [
			                    'skin_score' => [
			                        'add' => 2
			                    ]
			                ]
			            ]                		
                	]
                ],
                'decisions' => []
            ],
            [
            	'identifier' => 5,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [
            		'title' => 'What is your skin type?',
            		'body' => '',
            	],
                'type' => 'text_options',
                'options' => [
                	[
			            'data' => [
			                'text' => 'Dry',
			            ],
			            'to' => 6,
			            'operations' => [
			                [
			                    'skin_score' => [
			                        'add' => 1
			                    ]
			                ]
			            ]                		
                	],
                	[
			            'data' => [
			                'text' => 'Regular',
			            ],
			            'to' => 6,
			            'operations' => [
			            	[
			                    'skin_score' => [
			                        'add' => 6
			                    ]
			                ]
			            ]                		
                	],
                	[
			            'data' => [
			                'text' => 'Oily',
			            ],
			            'to' => 6,
			            'operations' => [
			                [
			                    'skin_score' => [
			                        'add' => 3
			                    ]
			                ]
			            ]                		
                	],
                	[
			            'data' => [
			                'text' => 'Combination (T-Zone)',
			            ],
			            'to' => 6,
			            'operations' => [
			                [
			                    'skin_score' => [
			                        'add' => 2
			                    ]
			                ]
			            ]                		
                	],
                	[
			            'data' => [
			                'text' => 'I\'m Not Sure',
			            ],
			            'to' => 6,
			            'operations' => [
			                [
			                    'skin_score' => [
			                        'add' => 1
			                    ]
			                ]
			            ]                		
                	],
                ],
                'decisions' => []
            ],
            [
            	'identifier' => 6,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [
            		'title' => 'How many times do you wash your face per day with soap/facewash?',
            		'body' => '',
            	],
                'type' => 'text_options',
                'options' => [
                	[
			            'data' => [
			                'text' => '1-2 times',
			            ],
			            'to' => 54,
			            'operations' => [
			                [
			                    'habits_score' => [
			                        'add' => 1
			                    ]
			                ]
			            ]                		
                	],
                	[
			            'data' => [
			                'text' => '3-5 times',
			            ],
			            'to' => 54,
			            'operations' => [
			                [
			                    'habits_score' => [
			                        'add' => 2
			                    ]
			                ]
			            ]                		
                	],
                	[
			            'data' => [
			                'text' => 'More than 5 times',
			            ],
			            'to' => 54,
			            'operations' => [
			                [
			                    'habits_score' => [
			                        'add' => 2
			                    ]
			                ]
			            ]                		
                	],                	
                ],
                'decisions' => []
            ],
            [
            	'identifier' => 7,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [
            		'title' => 'Do you have dandruff?',
            		'body' => '',
            	],
                'type' => 'text_options',
                'options' => [
                	[
			            'data' => [
			                'text' => 'Yes',
			            ],
			            'to' => 8,
			            'operations' => [
			                [
			                    'skin_score' => [
			                        'add' => 3
			                    ]
			                ]
			            ]                		
                	],
                	[
			            'data' => [
			                'text' => 'No',
			            ],
			            'to' => 8,
			            'operations' => [
			                [
			                    'skin_score' => [
			                        'add' => 1
			                    ]
			                ]
			            ]                		
                	],
                	[
			            'data' => [
			                'text' => 'I\'m not sure',
			            ],
			            'to' => 8,
			            'operations' => [
			                [
			                    'skin_score' => [
			                        'add' => 2
			                    ]
			                ]
			            ]                		
                	],                	
                ],
                'decisions' => []
            ],
            [
            	'identifier' => 8,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [
            		'title' => 'Describe your acne',
            		'body' => '',
            	],
                'type' => 'image_text_options',
                'options' => [
                	[
			            'data' => [
							'text'      => 'Only Blackheads',
							'image_url' => 'https://acnecare.site/wp-content/uploads/sites/4/2017/10/blackhead-nose-300x232.jpg',
			            ],
			            'to' => 38,
			            'operations' => []                		
                	],
                	[
			            'data' => [
			                'text' => 'Mild',
			                'image_url' => 'https://c8.alamy.com/comp/ABF9WH/mild-acne-on-the-forehead-ABF9WH.jpg',
			            ],
			            'to' => 9,
			            'operations' => [
			                [
			                    'acne_score' => [
			                        'add' => 1
			                    ]
			                ]
			            ]                		
                	],
                	[
			            'data' => [
			                'text' => 'Moderate',
			                'image_url' => 'https://4.bp.blogspot.com/-SOjFegndeWc/WdOznV1RDOI/AAAAAAAAANo/WBR0obmtQQADEB532tLodS5Zw6wSP9frwCLcBGAs/s1600/acne%2Bvulgaris.jpg'
			            ],
			            'to' => 9,
			            'operations' => [
			                [
			                    'acne_score' => [
			                        'add' => 3
			                    ]
			                ]
			            ]                		
                	],                	
                	[
			            'data' => [
							'text'      => 'Severe',
							'image_url' => 'https://3.bp.blogspot.com/-9IzVjjod1Fk/WjfacLUNeQI/AAAAAAAABBo/yIYSml1s-qYeYIkk-onGrHsKcB13D3SGACLcBGAs/s1600/Step%2BKlassen%2B1%2B22.jpg',
			            ],
			            'to' => 9,
			            'operations' => [
			                [
			                    'acne_score' => [
			                        'add' => 5
			                    ]
			                ]
			            ]                		
                	],                	
                ],
                'decisions' => []
            ], 
            [
            	'identifier' => 9,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [
            		'title' => 'Which of the following best describes your acne?',
            		'body' => '',
            	],
                'type' => 'image_text_multiple_choice',
                'options' => [
                	[
			            'data' => [
							'text'  => 'A non-inflammatory white bump with pores that are closed at the surface of the skin (whitehead)',
							'image_url'  => 'https://qph.fs.quoracdn.net/main-qimg-d35a3dbff626af2f33ba7db1e4cbeda6-c',
			            ],
			            'to' => 10,
			            'operations' => []                		
                	],                	 	
                	[
			            'data' => [
							'text'  => 'Small inflamed red or pink bumps that may be tender to the touch with pus at the tips (papules)',
							'image_url'  => 'data:image/jpeg;base64,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',
			            ],
			            'to' => 10,
			            'operations' => []                		
                	],         
                	[
			            'data' => [
							'text'  => 'Pus-filled pimples that are often red at the base (pustules)',
							'image_url'  => 'https://www.healthline.com/hlcmsresource/images/galleries/acne/642x361_Slide_4_Types_of_Acne.jpg',
			            ],
			            'to' => 10,
			            'operations' => []                		
                	],         [
			            'data' => [
							'text'  => 'Solid, painful lumps beneath the surface of the skin (Nodules)',
							'image_url'  => 'https://c8.alamy.com/comp/ARCRX6/a-photograph-of-inflammatory-or-mixed-acne-in-a-male-subject-showing-ARCRX6.jpg',
			            ],
			            'to' => 10,
			            'operations' => []                		
                	],         [
			            'data' => [
							'text'  => 'Large, painful pus-filled pimples deep in the skin that can cause scarring (Cysts)',
							'image_url'  => 'https://cdn1.medicalnewstoday.com/content/images/articles/103/103258/acne-scarring.jpg',
			            ],
			            'to' => 10,
			            'operations' => []                		
                	],                	 	
                ],
                'decisions' => []
            ],
            [
            	'identifier' => 10,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [
            		'title' => 'Is your acne painful ?',
            		'body' => '',
            	],
                'type' => 'text_multiple_choice',
                'options' => [
                	[
			            'data' => [
							'text'  => 'Yes',
			            ],
			            'to' => 11,
			            'operations' => [
			                [
			                    'acne_score' => [
			                        'add' => 2
			                    ]
			                ]
			            ]                		
                	],                	 	
                	[
			            'data' => [
							'text'  => 'No',
			            ],
			            'to' => 11,
			            'operations' => [
			                [
			                    'acne_score' => [
			                        'add' => 1
			                    ]
			                ]
			            ]                		
                	]                	 	
                ],
                'decisions' => []
            ],
            [
            	'identifier' => 11,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [
            		'title' => 'How is your face affected by acne ?',
            		'body' => '',
            	],
                'type' => 'text_options',
                'options' => [
                	[
			            'data' => [
							'text'  => 'Concentrated in some areas',
			            ],
			            'to' => 12,
			            'operations' => [
			                [
			                    'acne_score' => [
			                        'add' => 5
			                    ]
			                ]
			            ]                		
                	],                	 	
                	[
			            'data' => [
							'text'  => 'More than Half',
			            ],
			            'to' => 13,
			            'operations' => [
			                [
			                    'acne_score' => [
			                        'add' => 3
			                    ]
			                ]
			            ]                		
                	],                	 	
                	[
			            'data' => [
							'text'  => 'Less than half',
			            ],
			            'to' => 13,
			            'operations' => [
			                [
			                    'acne_score' => [
			                        'add' => 2
			                    ]
			                ]
			            ]                		
                	],                	 	
                	[
			            'data' => [
							'text'  => 'Scattered',
			            ],
			            'to' => 13,
			            'operations' => [
			                [
			                    'acne_score' => [
			                        'add' => 1
			                    ]
			                ]
			            ]                		
                	]                	 	
                ],
                'decisions' => []
            ],
            [
            	'identifier' => 12,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [
            		'title' => 'Select all that apply (Multiple choice can be selected)',
            		'body' => '',
            	],
                'type' => 'text_multiple_choice',
                'options' => [
                	[
			            'data' => [
							'text'  => 'Nose',
			            ],
			            'to' => 13,
			            'operations' => []                		
                	],                	 	
                	[
			            'data' => [
							'text'  => 'Cheeks',
			            ],
			            'to' => 13,
			            'operations' => []                		
                	],                	 	
                	[
			            'data' => [
							'text'  => 'Chin',
			            ],
			            'to' => 13,
			            'operations' => []                		
                	],                	 	
                	[
			            'data' => [
							'text'  => 'Forehead',
			            ],
			            'to' => 13,
			            'operations' => []                		
                	],                	 	
                	[
			            'data' => [
							'text'  => 'Jawline',
			            ],
			            'to' => 13,
			            'operations' => []                		
                	],                	 	
                	[
			            'data' => [
							'text'  => 'Neck',
			            ],
			            'to' => 13,
			            'operations' => []                		
                	]                	 	
                ],
                'decisions' => []
            ],
            [
            	'identifier' => 13,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [
            		'title' => 'What would be the approximate no. of acne on your face?',
            		'body' => '',
            	],
                'type' => 'text_options',
                'options' => [
                	[
			            'data' => [
							'text'  => '0-5',
			            ],
			            'to' => 49,
			            'operations' => [
			                [
			                    'acne_score' => [
			                        'add' => 1
			                    ]
			                ]
			            ]                		
                	],                	 	
                	[
			            'data' => [
							'text'  => '5-10',
			            ],
			            'to' => 49,
			            'operations' => [
			                [
			                    'acne_score' => [
			                        'add' => 2
			                    ]
			                ]
			            ]                		
                	],                	 	
                	[
			            'data' => [
							'text'  => '10-20',
			            ],
			            'to' => 49,
			            'operations' => [
			                [
			                    'acne_score' => [
			                        'add' => 3
			                    ]
			                ]
			            ]                		
                	],                	 	
                	[
			            'data' => [
							'text'  => '20-30',
			            ],
			            'to' => 49,
			            'operations' => [
			                [
			                    'acne_score' => [
			                        'add' => 4
			                    ]
			                ]
			            ]                		
                	],                	 	
                	[
			            'data' => [
							'text'  => 'More than 30',
			            ],
			            'to' => 49,
			            'operations' => [
			                [
			                    'acne_score' => [
			                        'add' => 5
			                    ]
			                ]
			            ]                		
                	]                	 	
                ],
                'decisions' => []
            ],
            [
            	'identifier' => 16,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [
            		'title' => 'Does your acne leave behind',
            		'body' => '',
            	],
                'type' => 'text_options',
                'options' => [
                	[
			            'data' => [
							'text'  => 'Pigmentation',
			            ],
			            'to' => 17,
			            'operations' => [
			                [
			                    'acne_score' => [
			                        'add' => 2
			                    ]
			                ]
			            ]                		
                	],                	 	
                	[
			            'data' => [
							'text'  => 'Scars',
			            ],
			            'to' => 17,
			            'operations' => [
			                [
			                    'acne_score' => [
			                        'add' => 3
			                    ]
			                ]
			            ]                		
                	],                	 	
                	[
			            'data' => [
							'text'  => 'No marks',
			            ],
			            'to' => 17,
			            'operations' => [
			                [
			                    'acne_score' => [
			                        'add' => 1
			                    ]
			                ]
			            ]                		
                	]           	 	
                ],
                'decisions' => []
            ],
            [
            	'identifier' => 17,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [
            		'title' => 'Does anyone else in your immediate family have acne ?',
            		'body' => '',
            	],
                'type' => 'text_options',
                'options' => [
                	[
			            'data' => [
							'text'  => 'Yes',
			            ],
			            'to' => 18,
			            'operations' => [
			                [
			                    'cause_score' => [
			                        'add' => 2
			                    ]
			                ]
			            ]                		
                	],                	 	
                	[
			            'data' => [
							'text'  => 'No',
			            ],
			            'to' => 18,
			            'operations' => [
			                [
			                    'cause_score' => [
			                        'add' => 1
			                    ]
			                ]
			            ]                		
                	]   	 	
                ],
                'decisions' => []
            ],
            [
            	'identifier' => 18,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [
            		'title' => 'Do you notice acne breakouts prior to periods?',
            		'body' => '',
            	],
                'type' => 'text_options',
                'options' => [
                	[
			            'data' => [
							'text'  => 'Yes',
			            ],
			            'to' => 19,
			            'operations' => [
			                [
			                    'cause_score' => [
			                        'add' => 3
			                    ]
			                ]
			            ]                		
                	],                	 	
                	[
			            'data' => [
							'text'  => 'No',
			            ],
			            'to' => 19,
			            'operations' => [
			                [
			                    'cause_score' => [
			                        'add' => 1
			                    ]
			                ]
			            ]                		
                	],                	 	
                	[
			            'data' => [
							'text'  => 'I\'m not sure',
			            ],
			            'to' => 19,
			            'operations' => [
			                [
			                    'cause_score' => [
			                        'add' => 2
			                    ]
			                ]
			            ]                		
                	]   	 	
                ],
                'decisions' => []
            ],
            [
            	'identifier' => 19,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [
            		'title' => 'How are your periods?',
            		'body' => '',
            	],
                'type' => 'text_options',
                'options' => [
                	[
			            'data' => [
							'text'  => 'Mostly Regular',
			            ],
			            'to' => 20,
			            'operations' => [
			                [
			                    'cause_score' => [
			                        'add' => 1
			                    ]
			                ]
			            ]                		
                	],                	 	
                	[
			            'data' => [
							'text'  => 'Mostly Irregular',
			            ],
			            'to' => 20,
			            'operations' => [
			                [
			                    'cause_score' => [
			                        'add' => 3
			                    ]
			                ]
			            ]                		
                	]
                ],
                'decisions' => []
            ],
            [
            	'identifier' => 20,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [
            		'title' => 'PolyCystic Ovary Syndrome (PCOS) is a condition that affects women&#39;s hormonal levels.	Have you been diagnosed with PCOS?',
            		'body' => '',
            	],
                'type' => 'text_options',
                'options' => [
                	[
			            'data' => [
							'text'  => 'Yes',
			            ],
			            'to' => 26,
			            'operations' => [
			                [
			                    'cause_score' => [
			                        'add' => 3
			                    ]
			                ]
			            ]                		
                	],                	 	
                	[
			            'data' => [
							'text'  => 'No',
			            ],
			            'to' => 26,
			            'operations' => [
			                [
			                    'cause_score' => [
			                        'add' => 1
			                    ]
			                ]
			            ]                		
                	],                	 	
                	[
			            'data' => [
							'text'  => 'I\'m not sure',
			            ],
			            'to' => 26,
			            'operations' => [
			                [
			                    'cause_score' => [
			                        'add' => 2
			                    ]
			                ]
			            ]                		
                	]
                ],
                'decisions' => []
            ],
            [
            	'identifier' => 21,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [
            		'title' => 'Now tell us a little about your nutrition and habits ! This helps us in suggesting better treatment methods :)',
            		'body' => 'It is predicted that you have Grade I Acne (Very Mild).',
            	],
                'type' => 'text_options',
                'options' => [
                	[
			            'data' => [
							'text'  => 'Continue',
			            ],
			            'to' => 27,
			            'operations' => [
			                [
			                    'acne_grade_score' => [
			                        'add' => 1
			                    ]
			                ]
			            ]                		
                	]
                ],
                'decisions' => []
            ],
            [
            	'identifier' => 22,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [
            		'title' => 'Now tell us a little about your nutrition and habits ! This helps us in suggesting better treatment methods :)',
            		'body' => 'It is predicted that you have Grade II Acne (Mild).',
            	],
                'type' => 'text_options',
                'options' => [
                	[
			            'data' => [
							'text'  => 'Continue',
			            ],
			            'to' => 27,
			            'operations' => [
			                [
			                    'acne_grade_score' => [
			                        'add' => 2
			                    ]
			                ]
			            ]                		
                	]
                ],
                'decisions' => []
            ],
            [
            	'identifier' => 23,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [
            		'title' => 'Now tell us a little about your nutrition and habits ! This helps us in suggesting better treatment methods :)',
            		'body' => 'It is predicted that you have Grade III Acne (Moderate).',
            	],
                'type' => 'text_options',
                'options' => [
                	[
			            'data' => [
							'text'  => 'Continue',
			            ],
			            'to' => 27,
			            'operations' => [
			                [
			                    'acne_grade_score' => [
			                        'add' => 3
			                    ]
			                ]
			            ]                		
                	]
                ],
                'decisions' => []
            ],
            [
            	'identifier' => 24,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [
            		'title' => 'Now tell us a little about your nutrition and habits ! This helps us in suggesting better treatment methods :)',
            		'body' => 'It is predicted that you have Grade IV Acne (Severe).',
            	],
                'type' => 'text_options',
                'options' => [
                	[
			            'data' => [
							'text'  => 'Continue',
			            ],
			            'to' => 27,
			            'operations' => [
			                [
			                    'acne_grade_score' => [
			                        'add' => 4
			                    ]
			                ]
			            ]                		
                	]
                ],
                'decisions' => []
            ],
            [
            	'identifier' => 25,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [
            		'title' => 'Now tell us a little about your nutrition and habits ! This helps us in suggesting better treatment methods :)',
            		'body' => 'It is predicted that you have Grade V Acne (Very Severe).',
            	],
                'type' => 'text_options',
                'options' => [
                	[
			            'data' => [
							'text'  => 'Continue',
			            ],
			            'to' => 27,
			            'operations' => [
			                [
			                    'acne_grade_score' => [
			                        'add' => 5
			                    ]
			                ]
			            ]                		
                	]
                ],
                'decisions' => []
            ],
            [
            	'identifier' => 26,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [],
                'type' => 'decider',
                'options' => [],
                'decisions' => [
                	[
	 					'when' => [
			                'acne_score' => [
			                    'lte' => 14
			                ]
		            	],
			            'to' => 21,
			            'operations' => []
                	],
                	[
	 					'when' => [
			                'acne_score' => [
			                    'lte' => 24
			                ]
		            	],
			            'to' => 22,
			            'operations' => []
                	],
                	[
	 					'when' => [
			                'acne_score' => [
			                    'lte' => 34
			                ]
		            	],
			            'to' => 23,
			            'operations' => []
                	],
                	[
	 					'when' => [
			                'acne_score' => [
			                    'gte' => 45
			                ]
		            	],
			            'to' => 25,
			            'operations' => []
                	],
                	[
	 					'when' => 'true',
			            'to' => 1,
			            'operations' => []
                	],
                ]
            ],
            [
            	'identifier' => 27,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [
					'title' => 'How much of plain water do you drink per day?',
					'body'  => 'The next few questions will be related to your nutrition !',
            	],
                'type' => 'text_options',
                'options' => [
                	[
			            'data' => [
							'text'  => '2-4 glasses',
			            ],
			            'to' => 28,
			            'operations' => [
			                [
			                    'food_score' => [
			                        'add' => 2
			                    ]
			                ]
			            ]                		
                	],
                	[
			            'data' => [
							'text'  => '4-8 glasses',
			            ],
			            'to' => 28,
			            'operations' => [
			                [
			                    'food_score' => [
			                        'add' => 1
			                    ]
			                ]
			            ]                		
                	],
                	[
			            'data' => [
							'text'  => 'More than 8 glasses',
			            ],
			            'to' => 28,
			            'operations' => [
			                [
			                    'food_score' => [
			                        'add' => 1
			                    ]
			                ]
			            ]                		
                	],
                ],
                'decisions' => []
            ],
            [
            	'identifier' => 28,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [
            		'title' => 'How often do you consume dairy products?',
            		'body' => '',
            	],
                'type' => 'text_options',
                'options' => [
                	[
			            'data' => [
							'text'  => 'Never',
			            ],
			            'to' => 29,
			            'operations' => [
			                [
			                    'food_score' => [
			                        'add' => 0
			                    ]
			                ]
			            ]                		
                	],
                	[
			            'data' => [
							'text'  => '2-3 times a week',
			            ],
			            'to' => 29,
			            'operations' => [
			                [
			                    'food_score' => [
			                        'add' => 1
			                    ]
			                ]
			            ]                		
                	],
                	[
			            'data' => [
							'text'  => 'More than 3 times a week',
			            ],
			            'to' => 29,
			            'operations' => [
			                [
			                    'food_score' => [
			                        'add' => 1
			                    ]
			                ]
			            ]                		
                	],
                	[
			            'data' => [
							'text'  => 'Once a day',
			            ],
			            'to' => 29,
			            'operations' => [
			                [
			                    'food_score' => [
			                        'add' => 3
			                    ]
			                ]
			            ]                		
                	],
                	[
			            'data' => [
							'text'  => 'Twice a day or more',
			            ],
			            'to' => 29,
			            'operations' => [
			                [
			                    'food_score' => [
			                        'add' => 3
			                    ]
			                ]
			            ]                		
                	],
                ],
                'decisions' => []
            ], 
            [
            	'identifier' => 29,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [
            		'title' => 'How often do you consume oily/fried/fast/sugary foods at home or out?',
            		'body' => '',
            	],
                'type' => 'text_options',
                'options' => [
                	[
                		
			            'data' => [
							'text'  => 'Everyday',
			            ],
			            'to' => 30,
			            'operations' => [
			                [
			                    'food_score' => [
			                        'add' => 3
			                    ]
			                ]
			            ]                		
                	],
                	[
			            'data' => [
							'text'  => '3-4 times a week',
			            ],
			            'to' => 30,
			            'operations' => [
			                [
			                    'food_score' => [
			                        'add' => 2
			                    ]
			                ]
			            ]                		
                	],
                	[
			            'data' => [
							'text'  => '1-2 times a week',
			            ],
			            'to' => 30,
			            'operations' => [
			                [
			                    'food_score' => [
			                        'add' => 1
			                    ]
			                ]
			            ]                		
                	],
                	[
			            'data' => [
							'text'  => 'Never',
			            ],
			            'to' => 30,
			            'operations' => [
			                [
			                    'food_score' => [
			                        'add' => 0
			                    ]
			                ]
			            ]                		
                	],                	
                ],
                'decisions' => []
            ],
            [
            	'identifier' => 30,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [
            		'title' => 'How is your bowel movement?',
            		'body' => '',
            	],
                'type' => 'text_options',
                'options' => [
                	[
                		
			            'data' => [
							'text'  => 'Mostly Constipated',
			            ],
			            'to' => 31,
			            'operations' => [
			                [
			                    'food_score' => [
			                        'add' => 3
			                    ]
			                ]
			            ]                		
                	],
                	[
			            'data' => [
							'text'  => 'Mostly Regular',
			            ],
			            'to' => 31,
			            'operations' => [
			                [
			                    'food_score' => [
			                        'add' => 1
			                    ]
			                ]
			            ]                		
                	],                	 	
                ],
                'decisions' => []
            ],
            [
            	'identifier' => 31,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [
            		'title' => 'What is the frequency of passing the stool?',
            		'body' => '',
            	],
                'type' => 'text_options',
                'options' => [
                	[
                		
			            'data' => [
							'text'  => 'Everyday',
			            ],
			            'to' => 33,
			            'operations' => [
			                [
			                    'food_score' => [
			                        'add' => 1
			                    ]
			                ]
			            ]                		
                	],
                	[
			            'data' => [
							'text'  => 'Once in 2 days',
			            ],
			            'to' => 33,
			            'operations' => [
			                [
			                    'food_score' => [
			                        'add' => 2
			                    ]
			                ]
			            ]                		
                	],
                	[
                		
			            'data' => [
							'text'  => 'Once in more than 2 days',
			            ],
			            'to' => 33,
			            'operations' => [
			                [
			                    'food_score' => [
			                        'add' => 3
			                    ]
			                ]
			            ]                		
                	],                	 	
                ],
                'decisions' => []
            ],
            [
            	'identifier' => 33,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [
            		'title' => 'Do you regularly experience any of the following symptoms?',
            		'body' => '',
            	],
                'type' => 'text_multiple_choice',
                'options' => [
                	[
                		
			            'data' => [
							'text'  => 'Acidity',
			            ],
			            'to' => 39,
			            'operations' => []                		
                	],
                	[
                		
			            'data' => [
							'text'  => 'Bloating',
			            ],
			            'to' => 39,
			            'operations' => []                		
                	],
                	[
                		
			            'data' => [
							'text'  => 'Flatulence',
			            ],
			            'to' => 39,
			            'operations' => []                		
                	],
                	[
                		
			            'data' => [
							'text'  => 'Loose Motions',
			            ],
			            'to' => 39,
			            'operations' => []                		
                	],
                	[
                		
			            'data' => [
							'text'  => 'None',
			            ],
			            'to' => 39,
			            'operations' => []                		
                	],                		 	
                ],
                'decisions' => []
            ],
            [
            	'identifier' => 38,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [
            		'title' => 'We regret that you cannot take this journey as we do not offer alternative treatments for blackheads !',
            		'body' => '',
            	],
                'type' => 'final',
                'options' => [],
                'decisions' => []
            ], 
            [
            	'identifier' => 39,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [
            		'title' => 'Do you regularly smoke or use tobacco products?',
            		'body' => 'The next few questions will be related to your habits !',
            	],
                'type' => 'text_options',
                'options' => [
                	[
			            'data' => [
							'text'  => 'Yes',
			            ],
			            'to' => 40,
			            'operations' => [
			            	 [
			                    'habits_score' => [
			                        'add' => 3
			                    ]
			                ]
			            ]                		
                	],
                	[
			            'data' => [
							'text'  => 'No',
			            ],
			            'to' => 40,
			            'operations' => [
	 						[
			                    'habits_score' => [
			                        'add' => 1
			                    ]
			                ]
			            ]                		
                	]                		
                ],
                'decisions' => []
            ],
            [
            	'identifier' => 40,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [
            		'title' => 'Do you regularly consume alcohol?',
            		'body' => '',
            	],
                'type' => 'text_options',
                'options' => [
                	[
			            'data' => [
							'text'  => 'Yes',
			            ],
			            'to' => 41,
			            'operations' => [
			            	 [
			                    'habits' => [
			                        'add' => 3
			                    ]
			                ]
			            ]                		
                	],
                	[
			            'data' => [
							'text'  => 'No',
			            ],
			            'to' => 41,
			            'operations' => [
	 						[
			                    'habits' => [
			                        'add' => 1
			                    ]
			                ]
			            ]                		
                	]                		
                ],
                'decisions' => []
            ], 
            [
            	'identifier' => 41,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [
            		'title' => 'Over the last 12 weeks (at most times) what has been your state of mind?',
            		'body' => '',
            	],
                'type' => 'text_options',
                'options' => [
                	[
			            'data' => [
							'text'  => 'Generally Happy',
			            ],
			            'to' => 42,
			            'operations' => [
			            	 [
			                    'mood_score' => [
			                        'add' => 1
			                    ]
			                ]
			            ]                		
                	],
                	[
			            'data' => [
							'text'  => 'Mood Swings',
			            ],
			            'to' => 42,
			            'operations' => [
	 						[
			                    'mood_score' => [
			                        'add' => 8
			                    ]
			                ]
			            ]                		
                	],
                	[
			            'data' => [
							'text'  => 'Stressed',
			            ],
			            'to' => 42,
			            'operations' => [
	 						[
			                    'mood_score' => [
			                        'add' => 8
			                    ]
			                ]
			            ]                		
                	],
                	[
			            'data' => [
							'text'  => 'Depressed',
			            ],
			            'to' => 42,
			            'operations' => [
	 						[
			                    'mood_score' => [
			                        'add' => 8
			                    ]
			                ]
			            ]                		
                	],
                	[
			            'data' => [
							'text'  => 'Anxious',
			            ],
			            'to' => 42,
			            'operations' => [
	 						[
			                    'mood_score' => [
			                        'add' => 8
			                    ]
			                ]
			            ]                		
                	]               		
                ],
                'decisions' => []
            ],
            [
            	'identifier' => 42,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [
            		'title' => 'Any known allergies or sensitivities?',
            		'body' => '',
            	],
                'type' => 'text_options',
                'options' => [
                	[
			            'data' => [
							'text'  => 'Yes',
			            ],
			            'to' => 53,
			            'operations' => [
			            	 [
			                    'cause_score' => [
			                        'add' => 3
			                    ]
			                ]
			            ]                		
                	],
                	[
			            'data' => [
							'text'  => 'No',
			            ],
			            'to' => 43,
			            'operations' => [
	 						[
			                    'cause_score' => [
			                        'add' => 1
			                    ]
			                ]
			            ]                		
                	],
                	[
			            'data' => [
							'text'  => 'I\'m not sure',
			            ],
			            'to' => 43,
			            'operations' => [
	 						[
			                    'cause_score' => [
			                        'add' => 2
			                    ]
			                ]
			            ]                		
                	]                		
                ],
                'decisions' => []
            ],
            [
            	'identifier' => 43,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [
            		'title' => 'Your report will be generated shortly !',
            		'body' => '',
            	],
                'type' => 'generate_report',
                'options' => [
                	[
			            'data' => [
							'text'  => 'Continue',
			            ],
			            'to' => 53,
			            'operations' => []                		
                	]                		
                ],
                'decisions' => []
            ],             
            [
            	'identifier' => 47,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [
            		'title' => 'Thank You for your response !',
            		'body' => '',
            	],
                'type' => 'final',
                'options' => [],
                'decisions' => []
            ],
            [
            	'identifier' => 49,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [
            		'title' => 'Do you have acne on other parts of your body ?',
            		'body' => '',
            	],
                'type' => 'text_options',
                'options' => [
                	[
			            'data' => [
							'text'  => 'Yes',
			            ],
			            'to' => 50,
			            'operations' => []                		
                	],
                	[
			            'data' => [
							'text'  => 'No',
			            ],
			            'to' => 16,
			            'operations' => []                		
                	]                		
                ],
                'decisions' => []
            ],                     
            [
            	'identifier' => 50,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [
            		'title' => 'Select all that apply (Multiple choice can be selected)',
            		'body' => '',
            	],
                'type' => 'text_multiple_choice',
                'options' => [
                	[
			            'data' => [
							'text'  => 'Back',
			            ],
			            'to' => 16,
			            'operations' => []                		
                	],
	 				[
			            'data' => [
							'text'  => 'Chest',
			            ],
			            'to' => 16,
			            'operations' => []                		
                	],		
                	[
			            'data' => [
							'text'  => 'Upper Arms',
			            ],
			            'to' => 16,
			            'operations' => []                		
                	],
	 				[
			            'data' => [
							'text'  => 'Others',
			            ],
			            'to' => 16,
			            'operations' => []                		
                	],					
                ],
                'decisions' => []
            ],             
            [
            	'identifier' => 53,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [
            		'title' => 'Select all that apply (Multiple choice can be selected)',
            		'body' => '',
            	],
                'type' => 'text_multiple_choice',
                'options' => [
                	[
			            'data' => [
							'text'  => 'Sun',
			            ],
			            'to' => 43,
			            'operations' => []                		
                	],
	 				[
			            'data' => [
							'text'  => 'Dust',
			            ],
			            'to' => 43,
			            'operations' => []                		
                	],		
                	[
			            'data' => [
							'text'  => 'Soap',
			            ],
			            'to' => 43,
			            'operations' => []                		
                	],
	 				[
			            'data' => [
							'text'  => 'Cosmetics',
			            ],
			            'to' => 43,
			            'operations' => []                		
                	],					
                ],
                'decisions' => []
            ], 
            [
            	'identifier' => 54,
                'tree_id' => $trees[str_slug('Acne')],
            	'data' => [
            		'title' => 'Any known allergies or sensitivities?',
            		'body' => '',
            	],
                'type' => 'text_options',
                'options' => [
                	[
			            'data' => [
							'text'  => 'Dry and average amount of hair',
			            ],
			            'to' => 7,
			            'operations' => []                		
                	],
	 				[
			            'data' => [
							'text'  => 'Fine, thin, reddish hair with premature greying',
			            ],
			            'to' => 7,
			            'operations' => []                		
                	],
					[
			            'data' => [
							'text'  => 'Thick, oily, black, brown hair',
			            ],
			            'to' => 7,
			            'operations' => []                		
                	],	
                ],
                'decisions' => []
            ],
        ];



        foreach ($nodes as $node) {
            try {

                $found = Node::notDeleted()->whereTreeId($node['tree_id'])->whereidentifier($node['identifier'])->first();

                if ( ! is_null($found)) continue;

                var_dump("seeding node with identifier". $node['identifier']. " and tree id ". $node['tree_id']);

                $t = Node::create([
					'identifier'     => $node['identifier'],
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
<?php

use Illuminate\Database\Seeder;
use App\Models\Tree;
use App\Models\{Node, Section};

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
            'acne' => Tree::notDeleted()->whereSlug('acne')->first()->id,
        ];

	 	$sections = [         
            'ACNE'                  => Section::whereTitle('ACNE')->first()->id,
            'PERSONAL'                  => Section::whereTitle('PERSONAL')->first()->id
        ];

        $nodes = [
            [
            	'identifier' => 1,
                'section_id' => $sections['ACNE'],
                'tree_id' => $trees['acne'],
            	'data' => [
            		'title' => 'For how long have you had acne?',
            		'body' => '',
            	],
            	'linker' => [
	                'type' => 'select_one',
	                'selectables' => [
	                	[
				            'data' => [
				                'text' => 'Less than 6 months',
				            'description' => null,
				            ],

				            'to' => 2 ,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
				                'text' => '6 months-2 years',
				            'description' => null,
				            ],

				            'to' => 2,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
				                'text' => 'More than 2 years',
				            'description' => null,
				            ],

				            'to' => 2,
				            'operations' => []
	                	],
	                ]
                ]
            ],
            [
            	'identifier' => 2,
                'section_id' => $sections['ACNE'],
                'tree_id' => $trees['acne'],
            	'data' => [
            		'title' => 'Have you tried any treatment for a significant (6 months or more) period of time?',
            		'body' => '',
            	],
            	'linker' => [
	                'type' => 'select_many',
	                'minimum' => '1',
	                'maximum' => '6',
	                'to' => 3,
	                'selectables' => [
	                	[
				            'data' => [
				                'text' => 'Allopathy Pills',
				            'description' => null,
				            ],

				            'to' => 3,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
				                'text' => 'Topical Creams',
				            'description' => null,
				            ],

				            'to' => 3,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
				                'text' => 'Naturopathy',
				            'description' => null,
				            ],

				            'to' => 3,
				            'operations' => []                		
	                	],                	
	                	[
				            'data' => [
				                'text' => 'Homeopathy',
				            'description' => null,
				            ],

				            'to' => 3,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
				                'text' => 'Ayurvedic',
				            'description' => null,
				            ],

				            'to' => 3,
				            'operations' => []                		
	                	],                	
	                	[
				            'data' => [
				                'text' => 'None',
				            'description' => null,
				            ],

				            'to' => 3,
				            'operations' => []                		
	                	],                	
	                ],
                ]
            ],
            [
            	'identifier' => 3,
                'section_id' => $sections['ACNE'],
                'tree_id' => $trees['acne'],
            	'data' => [
            		'title' => 'Are either of the following true for your skin?',
            		'body' => '',
            	],
            	'linker' => [
	                'type' => 'select_one',
	                'selectables' => [
	                	[
				            'data' => [
				                'text' => 'Reacts to skincare and cosmetic products',
				            'description' => null,
				            ],

				            'to' => 4,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
				                'text' => 'Turns red and dries out in hot weather or after a hot shower',
				            'description' => null,
				            ],

				            'to' => 4,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
				                'text' => 'Chapped, dry, flaky skin on exposure to cold weather.',
				            'description' => null,
				            ],

				            'to' => 4,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
				                'text' => 'Flushes easily after a spicy meal or drinking alcohol',
				            'description' => null,
				            ],

				            'to' => 4,
				            'operations' => []                		
	                	],
	                ]
                ]
            ],
            [
            	'identifier' => 4,
                'section_id' => $sections['ACNE'],
                'tree_id' => $trees['acne'],
            	'data' => [
            		'title' => 'Do you have any known allergies or sensitivities?',
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

				            'to' => 5,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
				                'text' => 'No',
				            'description' => null,
				            ],

				            'to' => 6,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
				                'text' => 'I\'m not sure',
				            'description' => null,
				            ],

				            'to' => 6,
				            'operations' => []                		
	                	]
	                ],
	            ]
            ],
            [
            	'identifier' => 5,
                'section_id' => $sections['ACNE'],
                'tree_id' => $trees['acne'],
            	'data' => [
            		'title' => 'I\'m alergic to',
            		'body' => '',
            	],
            	'linker' => [
	                'type' => 'select_many',
	                'minimum' => '1',
	                'maximum' => '5',
	                'to' => 6,
	                'selectables' => [
	                	[
				            'data' => [
				                'text' => 'Sun',
				            'description' => null,
				            ],

				            'to' => 6,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
				                'text' => 'Dust',
				            'description' => null,
				            ],

				            'to' => 6,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
				                'text' => 'Soap',
				            'description' => null,
				            ],

				            'to' => 6,
				            'operations' => []                		
	                	],                	
	                	[
				            'data' => [
				                'text' => 'Cosmetic',
				            'description' => null,
				            ],

				            'to' => 6,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
				                'text' => 'Food',
				            'description' => null,
				            ],

				            'to' => 6,
				            'operations' => []                		
	                	],	                	           	
	                ],
                ]
            ],
            [
            	'identifier' => 6,
                'section_id' => $sections['ACNE'],
                'tree_id' => $trees['acne'],
            	'data' => [
            		'title' => 'What is your skin type?',
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

				            'to' => 7,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
				                'text' => 'Regular',
				            'description' => null,
				            ],

				            'to' => 7,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
				                'text' => 'Oily',
				            'description' => null,
				            ],

				            'to' => 7,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
				                'text' => 'Combination (T-Zone)',
				            'description' => null,
				            ],

				            'to' => 7,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
				                'text' => 'I\'m Not Sure',
				            'description' => null,
				            ],

				            'to' => 7,
				            'operations' => []                		
	                	],
	                ],
	            ]
            ],
            [
            	'identifier' => 7,
                'section_id' => $sections['ACNE'],
                'tree_id' => $trees['acne'],
            	'data' => [
            		'title' => 'How many times do you wash your face per day with soap/facewash?',
            		'body' => '',
            	],
            	'linker' => [
	                'type' => 'select_one',
	                'selectables' => [
	                	[
				            'data' => [
				                'text' => '1-2 times',
				            'description' => null,
				            ],

				            'to' => 8,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
				                'text' => '3-5 times',
				            'description' => null,
				            ],

				            'to' => 8,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
				                'text' => 'More than 5 times',
				            'description' => null,
				            ],

				            'to' => 8,
				            'operations' => []                		
	                	],  
	                	[
				            'data' => [
				                'text' => 'Never',
				            'description' => null,
				            ],

				            'to' => 8,
				            'operations' => []                		
	                	],                	
	                ],
	            ]
            ],
            [
            	'identifier' => 8,
                'section_id' => $sections['ACNE'],
                'tree_id' => $trees['acne'],
            	'data' => [
            		'title' => 'What is the texture of your hair?',
            		'body' => '',
            	],
            	'linker' => [
	                'type' => 'select_one',
	                'selectables' => [
	                	[
				            'data' => [
				                'text' => 'Dry hair with oily scalp',
				            'description' => null,
				            ],

				            'to' => 9,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
				                'text' => 'Dry, brittle hair',
				            'description' => null,
				            ],

				            'to' => 9,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
				                'text' => 'Fine, thin hair',
				            'description' => null,
				            ],

				            'to' => 9,
				            'operations' => []                		
	                	],                	
	                	[
				            'data' => [
				                'text' => 'Premature greying',
				            'description' => null,
				            ],

				            'to' => 9,
				            'operations' => []                		
	                	],                	[
				            'data' => [
				                'text' => 'Luscious hair (Healthy, Thick hair)',
				            'description' => null,
				            ],

				            'to' => 9,
				            'operations' => []                		
	                	],                	
	                	[
				            'data' => [
				                'text' => 'None of the above',
				            'description' => null,
				            ],

				            'to' => 9,
				            'operations' => []                		
	                	],                	
	                ],
	            ]
            ],            
            [
            	'identifier' => 9,
                'section_id' => $sections['ACNE'],
                'tree_id' => $trees['acne'],
            	'data' => [
            		'title' => 'Do you have dandruff?',
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

				            'to' => 10,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
				                'text' => 'No',
				            'description' => null,
				            ],

				            'to' => 11,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
				                'text' => 'I\'m not sure',
				            'description' => null,
				            ],

				            'to' => 11,
				            'operations' => []                		
	                	],                	
	                ],
	            ]
            ],            
            [
            	'identifier' => 10,
                'section_id' => $sections['ACNE'],
                'tree_id' => $trees['acne'],
            	'data' => [
            		'title' => 'Since how long you have dandruff ?',
            		'body' => '',
            	],
            	'linker' => [
	                'type' => 'months',
				    'to' => 11
	            ]
            ],
            [
            	'identifier' => 11,
                'section_id' => $sections['ACNE'],
                'tree_id' => $trees['acne'],
            	'data' => [
            		'title' => 'How severe is your acne?',
            		'body' => '',
            	],
            	'linker' => [
	                'type' => 'select_one',
	                'selectables' => [
	                	[
				            'data' => [
								'text'      => 'Mild',
								'description' => null,
								'image_url' => 'https://c8.alamy.com/comp/ABF9WH/mild-acne-on-the-forehead-ABF9WH.jpg',
				            ],
				            'to' => 12,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
				                'text' => 'Moderate',
				                'description' => null,				                
				                'image_url' => 'https://4.bp.blogspot.com/-SOjFegndeWc/WdOznV1RDOI/AAAAAAAAANo/WBR0obmtQQADEB532tLodS5Zw6wSP9frwCLcBGAs/s1600/acne%2Bvulgaris.jpg',
				            ],
				            'to' => 12,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
				                'text' => 'Severe',
				                'description' => null,
				                'image_url' => 'https://3.bp.blogspot.com/-9IzVjjod1Fk/WjfacLUNeQI/AAAAAAAABBo/yIYSml1s-qYeYIkk-onGrHsKcB13D3SGACLcBGAs/s1600/Step%2BKlassen%2B1%2B22.jpg'
				            ],
				            'to' => 12,
				            'operations' => []                		
	                	]                		                	            	
	                ]
	             ]
            ], 
            [
            	'identifier' => 12,
                'section_id' => $sections['ACNE'],
                'tree_id' => $trees['acne'],
            	'data' => [
            		'title' => 'Which of the following best describes your acne?',
            		'body' => '',
            	],
            	'linker' => [
	                'type' => 'select_many',
	                'minimum' => 1, 
			        'maximum' => 6, 
			        'to' => 13, 
	                'selectables' => [
	                	[
				            'data' => [
								'text'  => 'A non-inflammatory white bump with pores that are closed at the surface of the skin (whitehead)',
								'description' => null,
								'image_url'  => 'https://qph.fs.quoracdn.net/main-qimg-d35a3dbff626af2f33ba7db1e4cbeda6-c',
				            ],
				            'to' => 13,
				            'operations' => []                		
	                	],                	 	
	                	[
				            'data' => [
								'text'  => 'Small inflamed red or pink bumps that may be tender to the touch with pus at the tips (papules)',
								'description' => null,
								'image_url'  => 'data:image/jpeg;base64,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',
				            ],
				            'to' => 13,
				            'operations' => []                		
	                	],         
	                	[
				            'data' => [
								'text'  => 'Pus-filled pimples that are often red at the base (pustules)',
								'description' => null,
								'image_url'  => 'https://www.healthline.com/hlcmsresource/images/galleries/acne/642x361_Slide_4_Types_of_Acne.jpg',
				            ],
				            'to' => 13,
				            'operations' => []                		
	                	],         
	                	[
				            'data' => [
								'text'  => 'Solid, painful lumps beneath the surface of the skin (Nodules)',
																'description' => null,
								'image_url'  => 'https://c8.alamy.com/comp/ARCRX6/a-photograph-of-inflammatory-or-mixed-acne-in-a-male-subject-showing-ARCRX6.jpg',
				            ],
				            'to' => 13,
				            'operations' => []                		
	                	],         [
				            'data' => [
								'text'  => 'Large, painful pus-filled pimples deep in the skin that can cause scarring (Cysts)',
																'description' => null,
								'image_url'  => 'https://cdn1.medicalnewstoday.com/content/images/articles/103/103258/acne-scarring.jpg',
				            ],
				            'to' => 13,
				            'operations' => []                		
	                	]                	 	
	                ]
	             ]
            ],
            [
            	'identifier' => 13,
                'section_id' => $sections['ACNE'],
                'tree_id' => $trees['acne'],
            	'data' => [
            		'title' => 'Is your acne painful ?',
            		'body' => '',
            	],
            	'linker' => [
	                'type' => 'select_one',
	                'selectables' => [
	                	[
				            'data' => [
								'text'  => 'Yes',
								'description' => null,
				            ],
				            'to' => 14,
				            'operations' => []                		
	                	],                	 	
	                	[
				            'data' => [
								'text'  => 'No',
								'description' => null,
				            ],
				            'to' => 14,
				            'operations' => []                		
	                	]                	 	
	                ]
	            ]
            ],
            [
            	'identifier' => 14,
                'section_id' => $sections['ACNE'],
                'tree_id' => $trees['acne'],
            	'data' => [
            		'title' => 'How is your face affected by acne ?',
            		'body' => '',
            	],
            	'linker' => [
	                'type' => 'select_one',
	                'selectables' => [
	                	[
				            'data' => [
								'text'  => 'Concentrated in some areas',
				            								'description' => null,
				            ],
				            'to' => 15,
				            'operations' => []                		
	                	],              	 	
	                	[
				            'data' => [
								'text'  => 'Scattered all over the face',
				            								'description' => null,
				            ],
				            'to' => 16,
				            'operations' => []                		
	                	]                	 	
	                ],
	            ]
            ],
            [
            	'identifier' => 15,
                'section_id' => $sections['ACNE'],
                'tree_id' => $trees['acne'],
            	'data' => [
            		'title' => 'Area where my face is affected ',
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
								'text'  => 'Nose',
				            								'description' => null,
				            ],
				            'to' => 16,
				            'operations' => []                		
	                	],              	 	
	                	[
				            'data' => [
								'text'  => 'Chin',
				            	'description' => null,
				            ],
				            'to' => 16,
				            'operations' => []                		
	                	], 	                	
	                	[
				            'data' => [
								'text'  => 'Cheeks',
					            'description' => null,
				            ],
				            'to' => 16,
				            'operations' => []                		
	                	],              	 	
	                	[
				            'data' => [
								'text'  => 'Forehead',
				            'description' => null,],

				            'to' => 16,
				            'operations' => []                		
	                	], 	                	
	                	[
				            'data' => [
								'text'  => 'Jawline',
				            'description' => null,],

				            'to' => 16,
				            'operations' => []                		
	                	]               	 	
	                ],
	            ]
            ],
             [
            	'identifier' => 16,
                'section_id' => $sections['ACNE'],
                'tree_id' => $trees['acne'],
            	'data' => [
            		'title' => 'Do you have acne on any other part of your body?',
            		'body' => '',
            	],
            	'linker' => [
	                'type' => 'select_one',
	                'selectables' => [
	                	[
				            'data' => [
								'text'  => 'Yes',
				            'description' => null,],

				            'to' => 17,
				            'operations' => []                		
	                	],                	 	
	                	[
				            'data' => [
								'text'  => 'No',
				            'description' => null,],

				            'to' => 18,
				            'operations' => []                		
	                	]                	 	
	                ]
	            ]
            ],
            [
            	'identifier' => 17,
                'section_id' => $sections['ACNE'],
                'tree_id' => $trees['acne'],
            	'data' => [
            		'title' => 'Select body parts where you have acne',
            		'body' => '',
            	],
            	'linker' => [
	                'type' => 'select_many',
	                'minimum' => 1, 
			        'maximum' => 4, 
			        'to' => 18,
	                'selectables' => [
	                	[
				            'data' => [
								'text'  => 'Back',
				            'description' => null,],

				            'to' => 18,
				            'operations' => []                		
	                	],
		 				[
				            'data' => [
								'text'  => 'Chest',
				            'description' => null,],

				            'to' => 18,
				            'operations' => []                		
	                	],		
	                	[
				            'data' => [
								'text'  => 'Upper Arms',
				            'description' => null,],

				            'to' => 18,
				            'operations' => []                		
	                	],
		 				[
				            'data' => [
								'text'  => 'Others',
				            'description' => null,],

				            'to' => 18,
				            'operations' => []                		
	                	],					
	                ]
	            ]                
            ],
            [
            	'identifier' => 18,
                'section_id' => $sections['ACNE'],
                'tree_id' => $trees['acne'],
            	'data' => [
            		'title' => 'Does your acne leave behind ?',
            		'body' => '',
            	],
            	'linker' => [
            	 	'type' => 'select_many',
	                'minimum' => 1, 
			        'maximum' => 4, 
			        'to' => 19,
	                'selectables' => [
	                	[
				            'data' => [
								'text'  => 'Pigmentation',
				            'description' => null,],

				            'to' => 19,
				            'operations' => []                		
	                	],                	 	
	                	[
				            'data' => [
								'text'  => 'Scars',
				            'description' => null,],

				            'to' => 19,
				            'operations' => []                		
	                	],                	 	
	                	[
				            'data' => [
								'text'  => 'No marks',
				            'description' => null,],

				            'to' => 19,
				            'operations' => []                		
	                	]           	 	
	                ],
	             ]
            ],
            [
            	'identifier' => 19,
                'section_id' => $sections['ACNE'],
                'tree_id' => $trees['acne'],
            	'data' => [
            		'title' => 'Does any of your Direct Blood Relative * have a history of acne?',
            		'body' => '',
            	],
            	'linker' => [
	                'type' => 'select_one',
	                'selectables' => [
	                	[
				            'data' => [
								'text'  => 'Yes',
				            'description' => null,],

				            'to' => 20,
				            'operations' => []                		
	                	],                	 	
	                	[
				            'data' => [
								'text'  => 'No',
				            'description' => null,],

				            'to' => 21,
				            'operations' => []                		
	                	]   	 	
	                ],
	            ]
            ],
            [
            	'identifier' => 20,
                'section_id' => $sections['ACNE'],
                'tree_id' => $trees['acne'],
            	'data' => [
            		'title' => 'Choose blood relative who have history of acne',
            		'body' => '',
            	],
            	'linker' => [
            	 	'type' => 'select_many',
	                'minimum' => 1, 
			        'maximum' => 4, 
			        'to' => 21,
	                'selectables' => [
	                	[
				            'data' => [
								'text'  => 'Mother',
				            'description' => null,],

				            'to' => 21,
				            'operations' => []                		
	                	],                	 	
	                	[
				            'data' => [
								'text'  => 'Father',
				            'description' => null,],

				            'to' => 21,
				            'operations' => []                		
	                	],                	 	
	                	[
				            'data' => [
								'text'  => 'Sibling',
				            'description' => null,],

				            'to' => 21,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
								'text'  => 'Grandparents',
				            'description' => null,],

				            'to' => 21,
				            'operations' => []                		
	                	]           	 	
	                ],
	             ]
            ],
            [
            	'identifier' => 21,
                'section_id' => $sections['ACNE'],
                'tree_id' => $trees['acne'],
            	'data' => [
            		'title' => 'Do you notice acne breakouts prior to periods?',
            		'body' => '',
            	],
            	'linker' => [
	                'type' => 'select_one',
	                'selectables' => [
	                	[
				            'data' => [
								'text'  => 'Yes',
				            'description' => null,],

				            'to' => 22,
				            'operations' => [ ]                		
	                	],                	 	
	                	[
				            'data' => [
								'text'  => 'No',
				            'description' => null,],

				            'to' => 22,
				            'operations' => []                		
	                	],                	 	
	                	[
				            'data' => [
								'text'  => 'I\'m not sure',
				            'description' => null,],

				            'to' => 22,
				            'operations' => []                		
	                	]   	 	
	                ],
	             ]
            ],
            [
            	'identifier' => 22,
                'section_id' => $sections['ACNE'],
                'tree_id' => $trees['acne'],
            	'data' => [
            		'title' => 'How are your periods?',
            		'body' => '',
            	],
            	'linker' => [
	                'type' => 'select_one',
	                'selectables' => [
	                	[
				            'data' => [
								'text'  => 'Mostly Regular',
								'description' => 'about the same no of days between the periods, about same duration each time and roughly the same amount of menstrual fluid each time'
				            ],
				            'to' => 25,
				            'operations' => []                		
	                	],                	 	
	                	[
				            'data' => [
								'text'  => 'Mostly Irregular',
				            'description' => null,],

				            'to' => 23,
				            'operations' => []                		
	                	]
	                ],
	            ]
            ],
            [
            	'identifier' => 23,
                'section_id' => $sections['ACNE'],
                'tree_id' => $trees['acne'],
            	'data' => [
            		'title' => 'Average number of days between two cycles',
            		'body' => '',
            	],
            	'linker' => [
            	 	'type' => 'text',
			        'to' => 24
	             ]
            ],            
            [
            	'identifier' => 24,
                'section_id' => $sections['ACNE'],
                'tree_id' => $trees['acne'],
            	'data' => [
            		'title' => 'My Menstrual flow',
            		'body' => '',
            	],
            	'linker' => [
            	 	'type' => 'select_many',
	                'minimum' => 1, 
			        'maximum' => 4, 
			        'to' => 25,
	                'selectables' => [
	                	[
				            'data' => [
								'text'  => 'Scanty',
				            'description' => null,],

				            'to' => 25,
				            'operations' => []                		
	                	],                	 	
	                	[
				            'data' => [
								'text'  => 'Moderate',
				            'description' => null,],

				            'to' => 25,
				            'operations' => []                		
	                	],                	 	
	                	[
				            'data' => [
								'text'  => 'Excessive',
				            'description' => null,],

				            'to' => 25,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
								'text'  => 'With clots',
				            'description' => null,],

				            'to' => 25,
				            'operations' => []                		
	                	]           	 	
	                ],
	             ]
            ],
            [
            	'identifier' => 25,
                'section_id' => $sections['ACNE'],
                'tree_id' => $trees['acne'],
            	'data' => [
//PolyCystic Ovary Syndrome (PCOS) is a condition that affects women&#39;s hormonal levels.	
            		'title' => 'Have you been diagnosed with PCOS?',
            		'body' => '',
            	],
            	'linker' => [
	                'type' => 'select_one',
	                'selectables' => [
	                	[
				            'data' => [
								'text'  => 'Yes',
				            'description' => null,],

				            'to' => 26,
				            'operations' => []                		
	                	],                	 	
	                	[
				            'data' => [
								'text'  => 'No',
				            'description' => null,],

				            'to' => 26,
				            'operations' => []                		
	                	],                	 	
	                	[
				            'data' => [
								'text'  => 'I\'m not sure',
				            'description' => null,],

				            'to' => 26,
				            'operations' => []                		
	                	]
	                ],
	            ]
            ],
            [
            	'identifier' => 26,
                'section_id' => $sections['ACNE'],
                'tree_id' => $trees['acne'],
            	'data' => [
					'title' => 'Do you have any of these?',
					'body'  => '',
            	],
            	'linker' => [
            	 	'type' => 'select_one',	                
	                'selectables' => [
	                	[
				            'data' => [
								'text'  => 'Excessive Facial & Body Hair',
				            'description' => null,],

				            'to' => 27,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
								'text'  => 'Hair Fall',
				            'description' => null,],

				            'to' => 27,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
								'text'  => 'Obesity',
				            'description' => null,],

				            'to' => 27,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
								'text'  => 'Pigmentation around neck',
				            'description' => null,],

				            'to' => 27,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
								'text'  => 'All of the above',
				            'description' => null,],

				            'to' => 27,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
								'text'  => 'None',
				            'description' => null,],

				            'to' => 27,
				            'operations' => []                		
	                	],
	                ],
                ]
            ],
            [
            	'identifier' => 27,
                'section_id' => $sections['ACNE'],
                'tree_id' => $trees['acne'],
            	'data' => [
					'title' => 'How much of plain water do you drink per day?',
					'body'  => '',
            	],
            	'linker' => [
            	 	'type' => 'select_one',	                
	                'selectables' => [
	                	[
				            'data' => [
								'text'  => '4 or less glasses',
				            'description' => null,],

				            'to' => 28,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
								'text'  => '5-8 glasses',
				            'description' => null,],

				            'to' => 28,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
								'text'  => 'More than 8 glasses',
				            'description' => null,],

				            'to' => 28,
				            'operations' => []                		
	                	]
	                ],
                ]
            ],
            [
            	'identifier' => 28,
                'section_id' => $sections['ACNE'],
                'tree_id' => $trees['acne'],
            	'data' => [
            		'title' => 'How often do you consume dairy products?',
            		'body' => '',
            	],
            	'linker' => [
	                'type' => 'select_one',
	                'selectables' => [
	                	[
				            'data' => [
								'text'  => 'Once or twice a day',
				            'description' => null,],

				            'to' => 29,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
								'text'  => 'Once or twice a week',
				            'description' => null,],

				            'to' => 29,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
								'text'  => 'Once or twice a month',
				            'description' => null,],

				            'to' => 29,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
								'text'  => 'Rarely',
				            'description' => null,],

				            'to' => 29,
				            'operations' => []                		
	                	]
	                ],
                ]
            ], 
            [
            	'identifier' => 29,
                'section_id' => $sections['ACNE'],
                'tree_id' => $trees['acne'],
            	'data' => [
            		'title' => 'How often do you consume oily/fried/fast/sugary foods at home or out?',
            		'body' => '',
            	],
            	'linker' => [
	                'type' => 'select_one',
	                'selectables' => [
	                	[
	                		
				            'data' => [
								'text'  => 'Almost Daily',
				            'description' => null,],

				            'to' => 30,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
								'text'  => '1-2 times a week',
				            'description' => null,],

				            'to' => 30,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
								'text'  => '1-2 times a month',
				            'description' => null,],

				            'to' => 30,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
								'text'  => 'Rarely',
				            'description' => null,],

				            'to' => 30,
				            'operations' => []                		
	                	],                	
	                ],
                ]
            ],
            [
            	'identifier' => 30,
                'section_id' => $sections['ACNE'],
                'tree_id' => $trees['acne'],
            	'data' => [
            		'title' => 'How is your bowel movement?',
            		'body' => '',
            	],
            	'linker' => [
	                'type' => 'select_one',
	                'selectables' => [
	                	[
	                		
				            'data' => [
								'text'  => 'Regular, once a day',
								'description'  => 'satisfactory, well formed stools, morning ',
				            ],
				            'to' => 31,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
								'text'  => 'Irregular, not every day',
								'description'  => 'skipping day, can be hard stools',
				            ],
				            'to' => 31,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
								'text'  => 'Ineffectual, Frequent urge during the day',
								'description'  => 'Frequent, unsatisfactory soft or semi solid stools',
				            ],
				            'to' => 31,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
								'text'  => 'Loose motions generally',
								'description'  => 'semi solid stools, with no fever',
				            ],
				            'to' => 31,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
								'text'  => 'Every day, but no fixed time',
								'description'  => 'well-formed stools, any time of the day',
				            ],
				            'to' => 31,
				            'operations' => []                		
	                	],                	 	
	                ],
				]                
            ],
            [
            	'identifier' => 31,
                'section_id' => $sections['ACNE'],
                'tree_id' => $trees['acne'],
            	'data' => [
            		'title' => 'Do you regularly experience any of the following symptoms?',
            		'body' => '',
            	],
            	'linker' => [
	                'type' => 'select_many',
	                'minimum' => 1, 
			        'maximum' => 5, 
			        'to' => 32,
	                'selectables' => [
	                	[
	                		
				            'data' => [
								'text'  => 'Acidity',
				            'description' => null,],

				            'to' => 32,
				            'operations' => []                		
	                	],
	                	[
	                		
				            'data' => [
								'text'  => 'Bloating',
				            'description' => null,],

				            'to' => 32,
				            'operations' => []                		
	                	],
	                	[
	                		
				            'data' => [
								'text'  => 'Flatulence',
								'description'  => 'passing gas',
				            ],
				            'to' => 32,
				            'operations' => []                		
	                	],
	                	[
	                		
				            'data' => [
								'text'  => 'Eructation',
								'description'  => 'burps',
				            ],
				            'to' => 32,
				            'operations' => []                		
	                	],
	                	[
	                		
				            'data' => [
								'text'  => 'None',
				            'description' => null,],

				            'to' => 32,
				            'operations' => []                		
	                	],                		 	
	                ],
                ]
            ],           
            [
            	'identifier' => 32,
                'section_id' => $sections['ACNE'],
                'tree_id' => $trees['acne'],
            	'data' => [
            		'title' => 'Do you currently smoke or use tobacco products?',
            		'body' => '',
            	],
            	'linker' => [
	                'type' => 'select_one',
	                'selectables' => [
	                	[
				            'data' => [
								'text'  => 'Never',
				            'description' => null,],

				            'to' => 33,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
								'text'  => 'Every Day',
								'description'  => 'less than 5 cigarettes',
				            ],
				            'to' => 33,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
								'text'  => 'Every Day',
								'description'  => 'more than 5 cigarettes',
							],
				            'to' => 33,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
								'text'  => 'Socially',
								'description'  => '1-2 / week',
				            ],
				            'to' => 33,
				            'operations' => []                		
	                	],	                	
	                	[
				            'data' => [
								'text'  => 'Not anymore',
								'description'  => 'Quit more than 1 year ago',
				            ],
				            'to' => 33,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
								'text'  => 'Not anymore',
								'description'  => 'Quit less than 1 year ago',
				            ],
				            'to' => 33,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
								'text'  => 'Other Tobacco products',
								'description'  => 'Hukkah, Paan etc.',
				            ],
				            'to' => 33,
				            'operations' => []                		
	                	]                		
	                ],
                ]
            ],
            [
            	'identifier' => 33,
                'section_id' => $sections['ACNE'],
                'tree_id' => $trees['acne'],
            	'data' => [
            		'title' => 'Do you consume alcohol?',
            		'body' => '',
            	],
            	'linker' => [
	                'type' => 'select_one',
	                'selectables' => [
	                	[
				            'data' => [
								'text'  => 'Never',
				            'description' => null,],

				            'to' => 41,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
								'text'  => 'Every day',
								'description'  => '1 drink/day',
				            ],
				            'to' => 41,
				            'operations' => []                		
	                	],               		
	                	[
				            'data' => [
								'text'  => 'Socially',
								'description'  => '1-2 drink/occasion',
				            ],
				            'to' => 41,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
								'text'  => 'Heavy',
								'description'  => '>4 /occasion',
				            ],
				            'to' => 41,
				            'operations' => []                		
	                	],               		
	                	[
				            'data' => [
								'text'  => 'Not anymore',
								'description'  => 'quit more than 6 months ago',
				            ],
				            'to' => 41,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
								'text'  => 'Not anymore',
								'description'  => 'quit less than 6 months ago',
				            ],
				            'to' => 41,
				            'operations' => []                		
	                	],               		
	                ],
                ]
            ], 
            [
            	'identifier' => 41,
                'section_id' => $sections['ACNE'],
                'tree_id' => $trees['acne'],
            	'data' => [
            		'title' => 'Over the last 12 weeks (at most times) what has been your state of mind?',
            		'body' => '',
            	],
            	'linker' => [
	                'type' => 'select_one',
	                'selectables' => [
	                	[
				            'data' => [
								'text'  => 'Generally Happy',
				            'description' => null,],

				            'to' => 42,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
								'text'  => 'Mood Swings',
				            'description' => null,],

				            'to' => 42,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
								'text'  => 'Sad',
				            'description' => null,],

				            'to' => 42,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
								'text'  => 'Depressed',
				            'description' => null,],

				            'to' => 42,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
								'text'  => 'Anxious',
				            'description' => null,],

				            'to' => 42,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
								'text'  => 'Content',
				            'description' => null,],

				            'to' => 42,
				            'operations' => []                		
	                	],
	                	[
				            'data' => [
								'text'  => 'Ittitable',
				            'description' => null,],

				            'to' => 42,
				            'operations' => []                		
	                	]               		
	                ],
                ]
            ],
           [
            'tree_id' => $trees['acne'],
            'identifier' => 42,
            'section_id' => $sections['PERSONAL'],
            'data' => [
              'title' => 'What is your name ?',
              'body' => '',
            ],               
            'linker' => [                  
              'type' => 'full_name',
              'to' => 43              
            ]
          ],
          [
            'tree_id' => $trees['acne'],
            'identifier' => 43,
            'section_id' => $sections['PERSONAL'],
            'data' => [
              'title' => 'What is your phone number?',
              'body' => '',
            ],               
            'linker' => [                  
              'type' => 'number',
              'to' => 44              
            ]
          ],
          [
            'tree_id' => $trees['acne'],
            'identifier' => 44,
            'section_id' => $sections['PERSONAL'],
            'data' => [
              'title' => 'What is your Date of Birth?',
              'body' => '',
            ],               
            'linker' => [                  
              'type' => 'date',
              'to' => 45              
            ]
          ],
          [
            'tree_id' => $trees['acne'],
            'identifier' => 45,
            'section_id' => $sections['PERSONAL'],
            'data' => [
              'title' => 'What is your height?',
              'body' => '',
            ],               
            'linker' => [                  
              'type' => 'height',
              'to' => 46              
            ]
          ],
          [
            'tree_id' => $trees['acne'],
            'identifier' => 46,
            'section_id' => $sections['PERSONAL'],
            'data' => [
              'title' => 'What is your weight?',
              'body' => '',
            ],               
            'linker' => [                  
              'type' => 'weight',
              'to' => 47              
            ]
          ],
          [
            'tree_id' => $trees['acne'],
            'identifier' => 47,
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
                  'section_id' => $node['section_id'],
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
<?php
$EM_CONF[$_EXTKEY] = [
  'title' => 'T3v Content',
  'description' => 'The content extension of TYPO3Voila.',
  'author' => 'Maik Kempe',
  'author_email' => 'mkempe@bitaculous.com',
  'author_company' => 'Bitaculous - It\'s all about the bits, baby!',
  'category' => 'fe',
  'state' => 'stable',
  'version' => '2.1.0',
  'createDirs' => '',
  'uploadfolder' => false,
  'clearCacheOnLoad' => false,
  'constraints' => [
    'depends' => [
      'typo3' => '7.6.0-8.7.99',
      'fluid_styled_content' => '7.6.0-8.7.99',
      'gridelements' => '',
      'vhs' => '',
      't3v_core' => '',
      't3v_datamapper' => ''
    ],
    'conflicts' => [
      'css_styled_content' => '7.6.0-8.7.99'
    ],
    'suggests' => []
  ],
  'autoload' => [
    'psr-4' => [
      'T3v\\T3vContent\\' => 'Classes'
    ]
  ],
  'autoload-dev' => [
    'psr-4' => [
      'T3v\\T3vContent\\Tests\\' => 'Tests'
    ]
  ]
];
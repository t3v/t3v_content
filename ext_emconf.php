<?php
$EM_CONF[$_EXTKEY] = [
  'title' => 'T3v Content',
  'description' => 'The content extension of TYPO3Voila.',
  'author' => 'Maik Kempe',
  'author_email' => 'mkempe@bitaculous.com',
  'author_company' => 'Bitaculous - It\'s all about the bits, baby!',
  'category' => 'fe',
  'state' => 'stable',
  'version' => '1.7.2',
  'createDirs' => '',
  'uploadfolder' => false,
  'clearCacheOnLoad' => false,
  'constraints' => [
    'depends' => [
      'typo3' => '7.6.0-8.6.99',
      'fluid_styled_content' => '7.6.0-8.6.99',
      'gridelements' => '',
      't3v_core' => ''
    ],
    'conflicts' => [
      'css_styled_content' => '7.6.0-8.6.99'
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
<?php
$EM_CONF[$_EXTKEY] = [
  'title' => 'T3v Content',
  'description' => 'The content extension of TYPO3Voila.',
  'author' => 'Maik Kempe',
  'author_email' => 'mkempe@bitaculous.com',
  'author_company' => 'Bitaculous - It\'s all about the bits, baby!',
  'category' => 'fe',
  'state' => 'stable',
  'version' => '6.1.1',
  'createDirs' => '',
  'uploadfolder' => false,
  'clearCacheOnLoad' => false,
  'constraints' => [
    'depends' => [
      'typo3' => '8.7.0-9.5.99',
      'fluid_styled_content' => '8.7.0-9.5.99',
      'gridelements' => '',
      'replacecontent' => '',
      'vhs' => '',
      't3v_core' => ''
    ],
    'conflicts' => [
      'css_styled_content' => '8.7.0-9.5.99'
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
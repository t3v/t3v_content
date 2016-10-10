<?php
$EM_CONF[$_EXTKEY] = [
  'title' => 'T3v Content',
  'description' => 'The TYPO3voila Content extension.',
  'author' => 'Maik Kempe',
  'author_email' => 'mkempe@bitaculous.com',
  'author_company' => 'Bitaculous - It\'s all about the bits, baby!',
  'category' => 'fe',
  'state' => 'stable',
  'version' => '1.3.0',
  'shy' => false,
  'createDirs' => '',
  'uploadfolder' => false,
  'modify_tables' => '',
  'clearCacheOnLoad' => true,
  'constraints' => [
    'depends' => [
      'typo3' => '7.6.0-8.1.99',
      'fluid_styled_content' => '7.6.0-8.1.99',
      'gridelements' => '',
      't3v_core' => ''
    ],
    'conflicts' => [
      'css_styled_content' => '7.6.0-8.1.99'
    ],
    'suggests' => []
  ]
];
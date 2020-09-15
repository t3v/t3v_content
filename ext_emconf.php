<?php
/** @var string $_EXTKEY */

$EM_CONF[$_EXTKEY] = [
    'title' => 'T3v Content',
    'description' => 'The content extension of TYPO3 voilà.',
    'author' => 'Maik Kempe',
    'author_email' => 'mkempe@bitaculous.com',
    'author_company' => 'Bitaculous - It\'s all about the bits, baby!',
    'category' => 'fe',
    'state' => 'alpha',
    'version' => '8.0.0',
    'createDirs' => '',
    'uploadfolder' => false,
    'clearCacheOnLoad' => false,
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-10.4.99',
            'fluid_styled_content' => '9.5.0-10.4.99',
            'gridelements' => '',
            'sms_responsive_images' => '',
            'vhs' => '',
            't3v_core' => '',
            't3v_translations' => ''
        ],
        'conflicts' => [
            'css_styled_content' => '9.5.0-10.4.99'
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

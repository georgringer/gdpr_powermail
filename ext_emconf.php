<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Make Site compatible to GDPR',
    'description' => '',
    'category' => 'module',
    'author' => 'backend',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'version' => '0.1.0',
    'constraints' => [
        'depends' => [
            'gdpr' => '0.0.0-9.9.99',
            'typo3' => '8.7.0-9.9.99',
            'powermail' => '',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];

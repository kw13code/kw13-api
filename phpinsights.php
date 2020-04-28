<?php

use ObjectCalisthenics\Sniffs\Metrics\MaxNestingLevelSniff;

return [
    'preset' => 'default',
    'ide' => 'vscode',
    'exclude' => [
        'coverage-report',
        'tmp',
        //  'path/to/directory-or-file'
    ],
    'add' => [
        //  ExampleMetric::class => [
        //      ExampleInsight::class,
        //  ]
    ],
    'remove' => [
        // MaxNestingLevelSniff::class
        //  ExampleInsight::class,

    ],
    'config' => [
        //  ExampleInsight::class => [
        //      'key' => 'value',
        //  ],
    ],
];

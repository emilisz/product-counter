<?php

return [
    'default' => env('LOG_TARGET', 'json'),

    'csv' => [
        'class' => App\Log\Types\CsvLogger::class,
    ],

    'json' => [
        'class' => App\Log\Types\JsonLogger::class,
    ],

    'xml' => [
        'class' => App\Log\Types\XmlLogger::class,
    ]
];
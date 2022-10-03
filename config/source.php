<?php

return [
    'default' => env('LOG_SOURCE', 'jsonFile'),

    'jsonFile' => [
        'endpoint' =>  storage_path() . "/products.json",
    ],

    'jsonUrl' => [
        'endpoint' => 'http://'.config('app.url').'/api/products',
    ],

    'xmlFile' => [
        'endpoint' =>  storage_path() . "/products.xml",
    ],

    'xmlUrl' => [
        'endpoint' => 'http://'.config('app.url').'/api/products/xml',
    ],

    'csvFile' => [
        'endpoint' =>  storage_path() . '/products.csv'
    ]
];



<?php

return [

    // ---------------------------------------------
    // Default cache driver. Supported: file
    // ---------------------------------------------

    'default' => 'file',

    // ---------------------------------------------
    // Cache prefix
    // ---------------------------------------------

    'prefix' => 'nimble',

    // ---------------------------------------------
    // Configure the stores
    // ---------------------------------------------

    'stores' => [

        'file' => [
            'driver' => 'file',
            'path'   => NIMBLE_STORAGE.'/cache'
        ],

        // 'redis' => [
        //     'driver' => 'redis',
        //     'connection' => 'default'
        // ],
    ]
];
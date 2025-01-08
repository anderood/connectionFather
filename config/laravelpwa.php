<?php

return [
    'name' => 'ConnectionFather',
    'manifest' => [
        'name' => env('APP_NAME', 'Connection Father'),
        'short_name' => 'ConnectionFather',
        'start_url' => '/',
        'background_color' => '#ffffff',
        'theme_color' => '#000000',
        'display' => 'standalone',
        'orientation'=> 'any',
        'status_bar'=> 'black',
        'icons' => [
            '72x72' => [
                'path' => '/images/icons/icon-72x72.png',
                'purpose' => 'any'
            ],
            '96x96' => [
                'path' => '/images/icons/icon-96x96.png',
                'purpose' => 'any'
            ],
            '128x128' => [
                'path' => '/images/icons/icon-128x128.png',
                'purpose' => 'any'
            ],
            '144x144' => [
                'path' => '/images/icons/icon-144x144.png',
                'purpose' => 'any'
            ],
            '152x152' => [
                'path' => '/images/icons/icon-152x152.png',
                'purpose' => 'any'
            ],
            '192x192' => [
                'path' => '/images/icons/icon-192x192.png',
                'purpose' => 'any'
            ],
            '384x384' => [
                'path' => '/images/icons/icon-384x384.png',
                'purpose' => 'any'
            ],
            '512x512' => [
                'path' => '/images/icons/icon-512x512.png',
                'purpose' => 'any'
            ],
        ],
        'splash' => [
            '750x1334' => '/images/splash/image-1.png',
            '640x1136' => '/images/splash/image-1.png',
            '828x1792' => '/images/splash/image-1.png',
            '1125x2436' => '/images/splash/image-1.png',
            '1242x2208' => '/images/splash/image-1.png',
            '1242x2688' => '/images/splash/image-1.png',
            '1536x2048' => '/images/splash/image-2.png',
            '1668x2224' => '/images/splash/image-3.png',
            '1668x2388' => '/images/splash/image-4.png',
            '2048x2732' => '/images/splash/image-5.png',
        ],
        'shortcuts' => [
            [
                'name' => 'Connection Father App',
                'description' => 'Shortcut Link 1 Description',
                'url' => '/shortcutlink1',
                'icons' => [
                    "src" => "/images/icons/icon-72x72.png",
                    "purpose" => "any"
                ]
            ],
            [
                'name' => 'Shortcut Link 2',
                'description' => 'Shortcut Link 2 Description',
                'url' => '/shortcutlink2'
            ]
        ],
        'custom' => []
    ]
];

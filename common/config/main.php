<?php

return [
    'name' => 'Phycom',
    'shortName' => 'PC',
    'timeZone' => 'Europe/Tallinn',
    'language' => 'et',
    'components' => [
        'redis' => [
            'hostname' => PHYCOM_REDIS_HOST,
            'port'     => PHYCOM_REDIS_PORT,
        ],
        'session' => [
            'redis' => [
                'hostname' => PHYCOM_REDIS_HOST,
                'port'     => PHYCOM_REDIS_PORT,
                'database' => 1,
            ],
        ],
        'db' => [
            'dsn'      => 'pgsql:host=' . PHYCOM_DB_HOST . ';port=' . PHYCOM_DB_PORT . ';dbname=' . PHYCOM_DB_NAME,
            'username' => PHYCOM_DB_USER,
            'password' => PHYCOM_DB_PASS,
        ],
        'urlManagerFrontend' => [
            'baseUrl' => '/',
            'hostInfo' => PHYCOM_URL_PROTOCOL . '//' . PHYCOM_HOST_PUBLIC . '/',
        ],
        'urlManagerBackend' => [
            'baseUrl' => '/',
            'hostInfo' => PHYCOM_URL_PROTOCOL . '//' . PHYCOM_HOST_ADMIN . '/',
        ],
        'country' => [
            'defaultCountry' => 'EE',
            'preferredCountries' => ['EE'],
        ],
        'lang' => [

        ],
        'pages' => [
            'items' => [
                'about'             => ['name' => 'About page'],
                'about-en'          => ['name' => 'About page EN'],
                'team',
                'testimonials',
                'terms'             => ['name' => 'Terms and conditions'],
                'privacy-policy'    => ['name' => 'Privacy policy'],
                'cookie-policy'     => ['name' => 'Cookie policy'],
                'contact',
                'events',
                'careers',
                'order-info',
            ]
        ]
    ],
    'modules' => [
        'auth' => [
            'modules' => [
                phycom\common\modules\auth\Module::METHOD_GOOGLE => [
                    'enabled' => true,
                ],
                phycom\common\modules\auth\Module::METHOD_FACEBOOK => [
                    'enabled' => true,
                ]
            ],
        ]
    ]
];

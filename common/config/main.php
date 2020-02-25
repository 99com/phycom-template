<?php

return [
    'name' => 'Phycom',
    'shortName' => 'PC',
    'timeZone' => 'Europe/Tallinn',
    'language' => 'et',
    'components' => [
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

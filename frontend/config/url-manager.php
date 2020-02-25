<?php

return [
    'class' => \phycom\frontend\components\LocaleUrlManager::class,
    'baseUrl' => '/',
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => new \yii\helpers\ReplaceArrayValue([

        '/' => 'site/index',

        // product
        [
            'class' => \phycom\common\models\TranslatableUrlRule::class,
            'patterns' => [
                'en' => '/products/<category:[0-9a-zA-Z\-]+>',
                'et' => '/tooted/<category:[0-9a-zA-Z\-]+>',
            ],
            'route' => 'product/index',
        ],
        [
            'class' => \phycom\common\models\TranslatableUrlRule::class,
            'patterns' => [
                'en' => '/products',
                'et' => '/tooted',
            ],
            'route' => 'product/index',
        ],
        [
            'class' => \phycom\common\models\TranslatableUrlRule::class,
            'patterns' => [
                'en' => '/product/<key:[0-9a-zA-Z\-]+>',
                'et' => '/toode/<key:[0-9a-zA-Z\-]+>',
            ],
            'route' => 'product/view',
        ],
        [
            'class' => \phycom\common\models\TranslatableUrlRule::class,
            'patterns' => [
                'en' => '/product/quick-view/<id:[0-9]+>',
            ],
            'route' => 'product/quick-view',
        ],

        // blog
        [
            'class' => \phycom\common\models\TranslatableUrlRule::class,
            'patterns' => [
                'en' => '/blog/archive/<year:[0-9]{4}>/<month:[0-1][1-9]>',
                'et' => '/blogi/arhiiv/<year:[0-9]{4}>/<month:[0-1][1-9]>',
            ],
            'route' => 'post/archive',
        ],
        [
            'class' => \phycom\common\models\TranslatableUrlRule::class,
            'patterns' => [
                'en' => '/blog/<category:[0-9a-zA-Z\-]+>',
                'et' => '/blogi/<category:[0-9a-zA-Z\-]+>',
            ],
            'route' => 'post/index',
        ],
        [
            'class' => \phycom\common\models\TranslatableUrlRule::class,
            'patterns' => [
                'en' => '/blog',
                'et' => '/blogi',
            ],
            'route' => 'post/index',
        ],
        [
            'class' => \phycom\common\models\TranslatableUrlRule::class,
            'patterns' => [
                'en' => '/post/<key:[0-9a-zA-Z\-]+>',
                'et' => '/postitus/<key:[0-9a-zA-Z\-]+>',
            ],
            'route' => 'post/view',
        ],


        [
            'class' => \phycom\common\models\TranslatableUrlRule::class,
            'patterns' => [
                'en' => '/login',
                'et' => '/logi-sisse',
            ],
            'route' => 'site/login',
        ],
        [
            'class' => \phycom\common\models\TranslatableUrlRule::class,
            'patterns' => [
                'en' => '/signup',
                'et' => '/registreeru',
            ],
            'route' => 'site/signup',
        ],
        [
            'class' => \phycom\common\models\TranslatableUrlRule::class,
            'patterns' => [
                'en' => '/cart/checkout',
                'et' => '/ostukorv/vormista-tellimus',
            ],
            'route' => 'cart/checkout',
        ],
        [
            'class' => \phycom\common\models\TranslatableUrlRule::class,
            'patterns' => [
                'en' => '/shops',
                'et' => '/kohvikud',
            ],
            'route' => 'shop/index',
        ],
        [
            'class' => \phycom\common\models\TranslatableUrlRule::class,
            'patterns' => [
                'en' => '/account',
                'et' => '/konto',
            ],
            'route' => 'account/settings',
        ],
        [
            'class' => \phycom\common\models\TranslatableUrlRule::class,
            'patterns' => [
                'en' => '/order-history',
                'et' => '/minu-tellimused',
            ],
            'route' => 'account/order-history',
        ],
        '<controller:\w+>/<id:\d+>'                     => '<controller>/edit',
        '<controller:\w+>/<action:\w+>/<id:\d+>'        => '<controller>/<action>',
        '<controller:\w+>/<action:\w+>/'                => '<controller>/<action>',
        'file/download/<bucket:\w+>/<filename>'         => 'file/download',
        '<key:[0-9a-zA-Z\-]+>'                          => 'page/view'
    ]),
    'ignoreLanguageUrlPatterns' => [
        // route pattern => url pattern
        '#^images/#' => '#^images/#',
        '#^assets/#' => '#^assets/#',
        '#^file/#' => '#^file/#',
    ],
];

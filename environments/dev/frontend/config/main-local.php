<?php

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '',
        ],
	    'urlManager' => [
		    'baseUrl' => '/',
	    ]
    ],
    'modules' => [
        'social' => [
            'facebook' => [
                'appId' => 190966544262417,
            ],
        ],
    ]
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
	    'allowedIPs'=>['*'],
	    'panels' => ['queue' => \yii\queue\debug\Panel::class]
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
	    'allowedIPs'=>['*']
    ];
}

return $config;

<?php

return [
	'components' => [
        'modelFactory' => [
            'modelOverloads' => [
                'getActiveForm' => phycom\frontend\widgets\bootstrap4\ActiveForm::class,
                'getModal'      => phycom\frontend\widgets\bootstrap4\Modal::class
            ]
        ],
        'view' => [
            'theme' => [
                'basePath' => '@app/themes/default',
                'baseUrl' => '@web/themes/default',
                'pathMap' => [
                    '@app/views' => [
                        '@app/themes/default',
                        '@phycom/frontend/views',
                    ]
                ],
            ]
        ],
        'socialShare' => [
            'class' => \ymaker\social\share\configurators\Configurator::class,
            'socialNetworks' => [
                'facebook' => [
                    'class' => \ymaker\social\share\drivers\Facebook::class,
                    'label' => '<i class="fab fa-facebook-f"></i>',
                ],
                'twitter' => [
                    'class' => \ymaker\social\share\drivers\Twitter::class,
                    'label' => '<i class="fab fa-twitter tx-info"></i>',
                ],
                'pinterest' => [
                    'class' => \ymaker\social\share\drivers\Pinterest::class,
                    'label' => '<i class="fab fa-pinterest tx-pink"></i>',
                ],
                'google' => [
                    'class' => \ymaker\social\share\drivers\GooglePlus::class,
                    'label' => '<i class="fab fa-google-plus-g tx-pink"></i>',
                ],
                'linkedin' => [
                    'class' => \ymaker\social\share\drivers\LinkedIn::class,
                    'label' => '<i class="fab fa-linkedin-in tx-info"></i>',
                ],
                'trello' => [
                    'class' => \ymaker\social\share\drivers\Trello::class,
                    'label' => '<i class="fab fa-trello"></i>',
                ],
                'tumblr' => [
                    'class' => \ymaker\social\share\drivers\Tumblr::class,
                    'label' => '<i class="fab fa-tumblr tx-inverse"></i>',
                ]
            ],
        ],
        'productSocialShare' => [
            'class' => \ymaker\social\share\configurators\Configurator::class,
            'options' => ['class' => 'btn btn-icon rounded-circle bd-2'],
            'socialNetworks' => [
                'twitter' => [
                    'class' => \ymaker\social\share\drivers\Twitter::class,
                    'label' => '<i class="fab fa-twitter"></i>',
                    'options' => ['class' => 'btn-outline-info']
                ],
                'google' => [
                    'class' => \ymaker\social\share\drivers\GooglePlus::class,
                    'label' => '<i class="fab fa-google-plus-g"></i>',
                    'options' => ['class' => 'btn-outline-danger']
                ],
                'facebook' => [
                    'class' => \ymaker\social\share\drivers\Facebook::class,
                    'label' => '<i class="fab fa-facebook-f"></i>',
                    'options' => ['class' => 'btn-outline-primary']
                ],
                'pinterest' => [
                    'class' => \ymaker\social\share\drivers\Pinterest::class,
                    'label' => '<i class="fab fa-pinterest"></i>',
                    'options' => ['class' => 'btn-outline-danger']
                ]
            ],
        ],
	],
    'modules' => [

    ]
];

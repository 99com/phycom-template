<?php
return [
	'modules' => [
		'email' => [
			//'testMode' => true,
			'modules' => [
				\phycom\common\modules\email\Module::PROVIDER_MAILGUN => [
                    'endpoint' => 'https://api.eu.mailgun.net',
                    'domain'   => 'mg.x89.eu'
				]
			]
		]
	],
    'components' => [
	    'urlManagerFrontend' => [
		    'baseUrl' => '/',
		    'hostInfo' => 'https://your-public-hostname-here/',
	    ],
	    'urlManagerBackend' => [
		    'baseUrl' => '/',
		    'hostInfo' => 'https://your-admin-hostname-here/',
	    ],
    ],
];

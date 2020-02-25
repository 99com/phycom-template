<?php
return [
	'modules' => [
		'email' => [
			'testMode' => true,
			'modules' => [
				\phycom\common\modules\email\Module::PROVIDER_MAILGUN => [
                    'domain' => 'sandbox1420958debd94db7b386a5b80c31ec8c.mailgun.org'
				]
			]
		]
	]
];

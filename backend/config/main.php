<?php

return [
	'components' => [
		'view' => [
			'theme' => [
				'basePath' => '@app/themes/adminlte',
				'baseUrl' => '@web/themes/adminlte',
				'pathMap' => [
					'@app/views' => [
						'@app/themes/adminlte',
						'@base-app/themes/adminlte'
					]
				],
			]
		],
	]
];
<?php

$config = [
	'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'FoOwzm-NS4xrnCPaCEhUP0QYOmnAdHjL',
        ],
		'redis' => [
            'database' => '2',
        ],
    ],
];

return $config;

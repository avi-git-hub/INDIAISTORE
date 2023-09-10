<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Memcached settings
| -------------------------------------------------------------------------
| Your Memcached servers can be specified below.
|
|	See: https://codeigniter.com/user_guide/libraries/caching.html#memcached
|
*/

$config = [
	'default' => [
		'port'     => '11211',
		'weight'   => '1',
	],
];

switch (ENVIRONMENT) {
		//beta server
	case 'development':
		$config['default']['hostname'] = '127.0.0.1';
		break;

		//stage server
	case 'testing':
		$config['default']['hostname'] = 'indiaistore-3-0-dev-ec.sm0sel.cfg.aps1.cache.amazonaws.com';
		break;

	case 'production':
		$config['default']['hostname'] = 'indiaistore-3-0-prod-ec.sm0sel.cfg.aps1.cache.amazonaws.com';
		break;

	default:
		$config['default']['hostname'] = '127.0.0.1';
		break;
}

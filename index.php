<?php

require '/var/www/vendor/autoload.php';
require '/var/www/core/bootstrap.php';

Router::load('routes.php')
	->direct(Request::uri(), Request::method());
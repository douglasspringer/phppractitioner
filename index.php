<?php

require '/var/www/vendor/autoload.php';
require '/var/www/core/bootstrap.php';

use App\Core\Router;
use App\Core\Request;

Router::load('app/routes.php')
	->direct(Request::uri(), Request::method());
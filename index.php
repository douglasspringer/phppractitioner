<?php

require '/var/www/vendor/autoload.php';
require '/var/www/core/bootstrap.php';



require Router::load('routes.php')
	->direct(Request::uri(), Request::method());
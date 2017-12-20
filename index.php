<?php

$database = require '/var/www/core/bootstrap.php';



require Router::load('routes.php')
	->direct(Request::uri());
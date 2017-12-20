<?php

$database = require 'bootstrap.php';

require 'Task.php';

$tasks = $database->selectAll('todos');

require 'index.view.php';
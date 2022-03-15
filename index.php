<?php
require 'vendor/autoload.php';
// Framework Variable erstellen
$f3 = \Base::instance();
// App Configuration
require 'config.php';
// Routing
require 'routes.php';

$f3->run();
<?php
require 'vendor/autoload.php';
// Framework Variable erstellen
$f3 = \Base::instance();

// Routing
require 'routes.php';

$f3->run();
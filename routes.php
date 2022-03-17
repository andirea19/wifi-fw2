<?php
// Home
// erhalten wir eine GET Anfrage auf die Homepage, rufe im namespace
// Controller die Methode index der Klasse HomeController auf.
$f3->route('GET /', '\Controller\HomeController->index');

// User
$f3->route('GET /user', '\Controller\UserController->index');
// Ähnlich wie: /user.php?id=xxx
$f3->route('GET /user/@id', '\Controller\UserController->user'); // edit
// Ähnlich wie: /user-delete?id=xxx
$f3->route('GET /user/delete/@id', '\Controller\UserController->delete'); // delete
<?php
// Pfade zu den views dynamisieren. Sie können nun zentral geändert werden,
// falls das nötig ist. Ansonsten müssten die Pfade in jeder
// Controller Methode aktualisiert werden, wenn sie sich ändern.
// Pfad zum views folder
$f3->set('viewsPath', '/views/');
// Pfad zu den einzelnen Contents der Seiten
$f3->set('contentPath', $f3->get('viewsPath') . 'content/');
// Resources Pfad
$f3->set('resourcesPath', '/resources/');
//
$f3->set('cssPath', $f3->get('resourcesPath') . 'css/');
$f3->set('jsPath', $f3->get('resourcesPath') . 'js/');
$f3->set('imagePath', $f3->get('resourcesPath') . 'img/');


/************* Database credentials ***********************/
$f3->set('dbHost', 		'localhost');
$f3->set('dbUser', 		'root');
$f3->set('dbPassword', 	'');
$f3->set('dbDatabase', 	'bestlearning');


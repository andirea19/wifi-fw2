<?php
namespace Controller;

class HomeController {
	public function index($f3, $params)
	{
		// Jede Controller Methode, die von einer route aufgerufen wird,
		// muss die Variable content deklarieren. Sie zeigth auf eine
		// Datei in contentPath.
		$f3->set('content', $f3->get('contentPath') . 'home.html');
		$f3->set('username', 'Thomas Macher');
		// JEDE Controller Methode, die von einer route aufgerufen wird,
		// muss nur noch index.html im views folder anzeigen.
		echo \Template::instance()->render($f3->get('viewsPath') . 'index.html');
	}
}
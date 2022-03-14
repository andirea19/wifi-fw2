<?php
namespace Controller;

class HomeController {
	public function index($f3, $params)
	{
		echo \Template::instance()->render($f3->get('viewsPath') . 'index.html');
	}
}
<?php
namespace Controller;

class HomeController {
	public function index($f3, $params)
	{
		echo \Template::instance()->render('/views/index.html');
	}
}
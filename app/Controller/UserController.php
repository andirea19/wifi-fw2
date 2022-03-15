<?php
namespace Controller;

class UserController {
	public function index($f3, $params)
	{
		// Content setzen
		$f3->set('content', $f3->get('contentPath') . 'user.html');
		$f3->set('docTitle', 'User');
		echo \Template::instance()->render($f3->get('viewsPath') . 'index.html');
	}
}
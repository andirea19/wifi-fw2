<?php
namespace Controller;

use \Model\UserModel;

class UserController {
	public function index($f3, $params)
	{
		// User auslesen
		$userModel = new UserModel();
		$f3->set('users', $userModel->users());

		// Content setzen
		$f3->set('content', $f3->get('contentPath') . 'user.html');
		$f3->set('docTitle', 'User');
		echo \Template::instance()->render($f3->get('viewsPath') . 'index.html');
	}

	public function user($f3, $params)
	{
		echo 'User Id: ' . $params['id'];
	}

	public function delete($f3, $params) {
		// Id aus params auslesen

		// Id an UserModel->delete übergeben

		// nach erfolgreichem Löschen auf user redirect (oder index Methode aufrufen)
	}
}
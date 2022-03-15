<?php
namespace Model;

abstract class Model {
	protected $conn;
	protected $f3;

	public function __construct()
	{
		$this->f3 = \Base::instance();
		/*
			BEACHTE: globale PHP Methoden in einem Namespace müssen mit einem
			backslash davor erstellt werden.
		*/
		$this->conn = new \mysqli(
			$this->f3->get('dbHost'),
			$this->f3->get('dbUser'),
			$this->f3->get('dbPassword'),
			$this->f3->get('dbDatabase')
		);

		if (!$this->conn) {
			die('Could not connect to database');
		}
	}
}
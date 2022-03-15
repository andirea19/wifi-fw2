<?php
namespace Model;

class UserModel extends Model {
	/**
	 * Alle User auslesen
	 *
	 * @return  array
	 */
	public function users() : array
	{
		$users = [];

		$sql = 'SELECT id, salutation, title, first_name, last_name, email FROM users ORDER BY last_name ASC';
		$stmt = $this->conn->prepare($sql);
		$result = $stmt->execute();

		// Prüfen, ob das result OK ist
		if (!$result) {
			// TODO: Redirect zu error Page
			die($this->conn->error);
		}
		$stmt->bind_result($id, $salutation, $title, $firstName, $lastName, $email);
		while ($row = $stmt->fetch()) {
			$users[] = [
				'id' => $id,
				'salutation' => $salutation,
				'title' => $title,
				'firstName' => $firstName,
				'lastName' => $lastName,
				'email' => $email,
				'fullName' => "$salutation $title $firstName $lastName"
			];
		}
		return $users;
	}
}
<?php

class Database
{
    private $connection;

    public function __construct()
    {
        $this->connection = $this->get_conection();
    }

    private function get_conection()
    {
		$conn = new PDO('sqlite:database/database.db');
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $conn;
    }

    public function query(String $sql, Array $params = [])
    {
		$statement = $this->connection->prepare($sql);
		foreach ($params as $key => $value) {
			$statement->bindParam($key, $value);
		}
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
	}

	public function single(String $sql, Array $params = [])
    {
		$statement = $this->connection->prepare($sql);
		foreach ($params as $key => $value) {
			$statement->bindParam($key, $value);
		}
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
	}
	
	public function get_all(String $table)
	{
		$sql = "SELECT * FROM $table";
		$statement = $this->connection->prepare($sql);
		$statement->execute();
		$items = $statement->fetchAll(PDO::FETCH_ASSOC);	
		return $items;
	}

	public function verify_user(String $email, String $password)
	{
		$user = $this->single(
			'select * from users where email = :email', 
			[':email' => $email]
		);

		$password_hash = $this->single(
			'select * from password_hashes where user_id = :user_id', 
			[':user_id' => $user['id']]
		);

		return password_verify($password, $password_hash['hash']);

	}
}
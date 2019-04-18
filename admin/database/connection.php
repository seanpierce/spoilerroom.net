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
        return new PDO('sqlite:database.db');
    }

    public function query(String $sql, Array $params)
    {
        $statement = $this->connection->prepare($sql);
        $statement->execute($params);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
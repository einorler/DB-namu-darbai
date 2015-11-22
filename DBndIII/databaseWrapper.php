<?php

class DatabaseWrapper {

    private $connection;

    public function __construct($host = '127.0.0.1', $databaseName = 'db3', $username = 'root', $password = '')
    {
        $this->connection = new PDO('mysql:='.$host.';dbname='.$databaseName, $username, $password);
    }

    public function getConnection()
    {
        return $this->connection;
    }

}
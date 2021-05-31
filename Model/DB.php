<?php

/**
 * connect to database
 * Class DB
 */
class DB {
    public string $server ='localhost';
    public string $user = 'root';
    public string $password = '';
    public string $db = 'mundus';


    private PDO $dbLink;

    /**
     * DB constructor.
     */
    public function __construct() {
        $this->dbLink = $this->connect();
    }


    /**
     * @return PDO
     */
    function connect() {
        $dsn = "mysql:host=$this->server;dbname=$this->db;charset=utf8";
        try {
            $conn = new PDO($dsn, $this->user, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,
                PDO::FETCH_ASSOC);
            return $conn;
        }
        catch(PDOException $exception) {
            echo $exception->getMessage();
            die();
        }
    }

}
<?php
class Database {
    public $connection;
    public function __construct() {
        $config = [
            'host' => 'localhost',
            'port' => 3306,
            'dbname' => 'myapp',
            'charset' => 'utf8mb4'
        ];

        http_build_query($data);

        $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";

        $this->connection = new PDO($dsn, 'root', 'root', [
            PDO::FETCH_ASSOC => PDO::FETCH_ASSOC
        ]);
    }
    public function query($query) {

        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }
}
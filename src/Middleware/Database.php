<?php

namespace App\Middleware;

use PDO;

class Database
{
    private PDO $pdo;
    protected string $table;

    public function __construct(string $table)
    {
        $this->table = $table;
    }

    /**
     * It creates a new PDO object if one doesn't already exist, and returns it
     *
     * @return The PDO object.
     */
    protected function getPDO(): PDO
    {

        $pdo = new PDO("mysql:host=".$_ENV['DB_HOST'].";dbname=".$_ENV['DB_NAME'].";charset=utf8",  $_ENV['DB_USER'],$_ENV['DB_PASSWORD']);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo = $pdo;
        return $this->pdo;
    }

    /**
     * It returns an array of objects of the class $class_name, which are the results of the query $statement
     *
     * @param statement the SQL query
     * @param class_name The name of the class you want to use to create objects.
     *
     * @return array An array of objects of the class $class_name
     */
    public function query(mixed $statement,mixed $class_name): array
    {
        $req = $this->getPDO()->query($statement);
        $datas = $req->fetchAll(PDO::FETCH_CLASS, $class_name);
        return $datas;
    }

    /**
     * It prepares a statement, executes it, and returns the result
     *
     * @param string statement the SQL query
     * @param attributes the values to be inserted into the query
     * @param class_name The name of the class to use to create the object.
     * @param one if you want to get only one result, set it to true.
     *
     * @return array The result of the query.
     */
    public function prepare(string $statement,mixed $attributes,mixed $class_name, bool $one = false): array|bool
    {
        $req = $this->getPDO()->prepare($statement);
        $res = $req->execute($attributes);
        if (strpos($statement, 'UPDATE') === 0 || strpos($statement, 'INSERT') === 0 || strpos($statement, 'DELETE') === 0) {
            return $res;
        }
        $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        if ($one) {
            $datas = $req->fetch();
        } else {
            $datas = $req->fetchAll();
        }
        return $datas;
    }

}

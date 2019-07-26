<?php

class Database
{

    private $dbhost = 'localhost';
    private $dbname = 'base';
    private $dbuser = 'root';
    private $dbpass = '';

    protected $dbh = null;

    protected $id = null;


    function __construct()
    {
        $this->dbh = new PDO(
            'mysql:host=' . $this->dbhost . ';dbname=' . $this->dbname,
            $this->dbuser,
            $this->dbpass
        );
        $this->dbh->query('SET NAMES utf8');
    }


    protected function createRecord($array)
    {

        $sql = $this->makeSql($array);
        print_r($sql);
        // print_r(array_values($array));

        try {

            $st = $this->dbh->prepare($sql);

            try {

                // print_r(array_values($array));

                $this->dbh->beginTransaction();
                $st->execute(array_values($array));
                $this->id = $this->dbh->lastInsertId();
                $this->dbh->commit();
            } catch (PDOExecption $e) {

                $this->dbh->rollback();
            }
        } catch (PDOExecption $e) { }
    }


    private function makeSql($array)
    {

        $cols = array_keys($array);
        $cols = implode(',', $cols);

        $sql = "INSERT INTO " . $this->table . "(";
        $sql .= $cols . ")";
        $sql .= " VALUES(";

        $i = 0;

        $elem = [];
        foreach ($array as $k => $el) {
            array_push($elem, '?');
        }

        $sql .= implode(',', $elem);

        $sql .= ")";

        return $sql;
    }
}

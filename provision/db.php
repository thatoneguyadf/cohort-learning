<?php

include "config.php";


class DB {
    public function __construct() {
        $this->db = new mysqli(DB_HOST, DB_USER, DB_PASS, DATABASE);

        if (mysqli_connect_errno()) {
            die('could not connect to database');
        }
    }

    public function query($sql) {
        return $this->db->query($sql);
    }

    public function select($sql) {
        $res = $this->query($sql);
        return $res->fetch_all(MYSQL_ASSOC);
    }

    public function insert($sql) {
        return $this->query($sql);
    }

    public function delete($sql) {
        return $this->query($sql);
    }

    public function update($sql) {
        return $this->query($sql);
    }

//    public function insert($sqlTemplate) {
//        if (!($stmt = $this->db->prepare($sqlTemplate))) {
//
//        }
//    }

    public function __destruct() {
        $this->db->close();
    }
}
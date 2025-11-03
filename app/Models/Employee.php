<?php

namespace App\Models;

class Employee{
    public static function all() {
        $db = new \mysqli("localhost","root","","classicmodels");

        $res = $db->query("SELECT * FROM `employees`;");

        return $res->fetch_all(MYSQLI_ASSOC);
    }
}
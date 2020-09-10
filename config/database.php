<?php

class Database {

    public static function connect(){

        $db = new mysqli('localhost', 'root', '', 'prueba_konecta');
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
}
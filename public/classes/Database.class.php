<?php

class Database {

    private static $instance = null;

    public static function getInstance(){
        if(null == self::$instance){
            try {
                //get instance for DB connection
                self::$instance = new PDO('mysql:host=mysql;dbname=homestead', 'homestead', 'homestead');
                //error reporting config 
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                return self::$instance;

            } catch (PDOException $e){
                //odchytime vyjimku a vypiseme chybu pripojeni
                echo 'Error: '.$e->getMessage();
                return false;
            }
        }

        return self::$instance;

    }
}

?>
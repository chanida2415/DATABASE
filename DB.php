<?php

class DB {
    public $dbh; // handle of the db connexion
    private static $instance;

    private function __construct() {
        // building data source name from config
        $dsn = 'mysql:host=' . Config::read('db.host') .
               ';dbname='    . Config::read('db.basename') .
               ';connect_timeout=15';
        // getting DB user from config                
        $user = Config::read('db.user');
        // getting DB password from config                
        $password = Config::read('db.password');

        $this->dbh = new PDO($dsn, $user, $password);
        $this->dbh->exec("set names utf8");
    }

    public static function getInstance() {
        if (!isset(self::$instance))
        {
            $object = __CLASS__;
            self::$instance = new $object;
        }
        return self::$instance;
    }

    // others global functions

    public static function checkResult($results) {
        echo "<br><pre><br>";
        print_r($results);
        echo "</pre>";
    }
}

?>
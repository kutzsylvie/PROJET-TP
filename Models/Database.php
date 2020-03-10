<?php
require_once '../config.php';
class Database {
    protected $db;
    private static $instance = null;
    public function __construct(){

    }
    public static function getInstance(){
        if(is_null(self::$instance)){
            $dsn = 'mysql:dbname=' . DB . ';host=' . HOST . ';charset=UTF8';
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            ];
            try {
                self::$instance = new PDO($dsn, USER, PASSWORD, $options);
            } catch (PDOException $ex) {
                die('La connexion à la bdd a échoué !' . $ex->getMessage());
            }
        }
        return self::$instance;
    }
}

<?php
  class Connection{
    private static $host = "localhost";
    private static $port = "3306";
    private static $user = "root";
    private static $password = "";
    private static $dbname = "store";

    public static function connect(){
        return mysqli_connect(Connection::$host, Connection::$user, Connection::$password, Connection::$dbname, Connection::$port);
    }
  }
?>
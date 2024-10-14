<?php
  Class Util{
    public static $servername = "localhost";
    public static $username = "root";
    public static $password = "";
    public static $dbname = "barbearia";
    public static function con(){
      $conn = new mysql(
        self::$severname,
        self::$username,
        self::$password,
        self::$dbname;
      );
    }
    
  }

?>
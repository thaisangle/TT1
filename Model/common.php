<?php
  /**
   *
   */
  class common
  {
      public static function connect(){
        // Create connection
        $conn = new mysqli("localhost", "root","", "productmananger");
        $conn->set_charset("utf8");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
  }

?>

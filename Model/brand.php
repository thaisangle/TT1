<?php
    /**
     *
     */
    class brand
    {
      var $id;
      var $name;
      var $image;
      function __construct($id,$name,$image)
      {
        // code...
        $this->id  = $id;
        $this->name = $name;
        $this->image = $image;
      }
      static function connect(){
          // Create connection
          $conn = new mysqli("localhost", "root","", "productmananger");
          $conn->set_charset("utf8");
          // Check connection
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }
          return $conn;
      }
      public static function getbrand(){
        $conn = brand ::connect();
        $sql = "select * from brands";
        $list = array();
        $result = $conn->query($sql);
        if($result->num_rows>0){
          while($row = $result ->fetch_assoc() ){
              $brand = new brand($row["id"],$row["name"],$row["image"]);
              array_push($list,$brand);
            }
          }
          $conn->close();
          return $list;
        }
    }

 ?>

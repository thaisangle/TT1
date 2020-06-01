<?php
include_once('./Model/common.php');
    /**
     *
     */
    class brand extends common
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

      public static function getbrand(){
        $conn = common ::connect();
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

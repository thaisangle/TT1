<?php
include_once('./Model/common.php');
  /**
   *
   */
  class gender extends common
  {
    var $id;
    var $name;
    var $image;
    function __construct($id,$name,$image)
    {
      $this ->id = $id;
      $this->name = $name;
      $this->image = $image;
    }
    public static function getgender(){
      $conn = common ::connect();
      $sql = "SELECT id_gender,name,url FROM `product_gender` INNER JOIN image ON product_gender.id_image = image.id";
      $list = array();
      $result = $conn->query($sql);
      if($result->num_rows>0){
        while($row = $result ->fetch_assoc() ){
            $gender = new gender($row["id_gender"],$row["name"],$row["url"]);
            array_push($list,$gender);
          }
        }
        $conn->close();
        return $list;
      }
  }

?>

<?php
  include_once('./Model/common.php');

  /**
   *
   */
  class category extends common
  {
    var $id;
    var $name;

    function __construct($id, $name)
    {
      $this->id = $id;
      $this->name = $name;
    }
    public static function getcategory(){
      $conn = common::connect();
      $sql = "select * from categorys";
      $result = $conn->query($sql);
      if($result->num_rows>0){
        while($row = $result ->fetch_assoc() ){
            $category = new category($row["id"],$row["name"]);
            array_push($list,$category);
          }
        }
        $conn->close();
        return $list;
      }
    // public static function getcategory($id){
    //   $conn = category::connect();
    //   $sql = "select * from categories where id = $id";
    //   $result = $conn->query($sql);
    //   if($result){
    //     $row = $result->fetch_assoc();
    //     $category = new category($row['id'],$row['name']);
    //     return $category;
    //   }
    //   $conn->close();
    // }
  }

?>

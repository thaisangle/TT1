<?php
  /**
   *
   */
  class category
  {
    var $id;
    var $name;

    function __construct($id, $name)
    {
      $this->id = $id;
      $this->name = $name;
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
    public static function getcategory(){
      $conn = category::connect();
      $sql = "select * from categorys";
      $result = $conn->query(sql);
      if($result->num_rows>0){
        while($row = $result ->fetch_assoc() ){
            $category = new category($row["id"],$row["name"]);
            array_push($list,$category);
          }
        }
        $conn->close();
        return $list;
      }
  }

?>

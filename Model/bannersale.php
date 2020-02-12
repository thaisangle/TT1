<?php
  /**
   *
   */
  class bannersale
  {
    var $id;
    var $url;
    public function __construct($id,$url)
    {
      $this->id = $id;
      $this->url = $url;
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
    public static function getBanner80(){
      $conn = bannersale ::connect();
      $sql = "Select * from bannersale80";
      $list = array();
      $result = $conn->query($sql);
      if($result->num_rows>0){
        while($row = $result ->fetch_assoc() ){
            $banner = new bannersale($row["id"],$row["url"]);
            array_push($list,$banner);
          }
        }
        $conn->close();
        return $list;
    }
    public static function getBanner40(){
      $conn = bannersale ::connect();
      $sql = "Select * from bannersale40";
      $list = array();
      $result = $conn->query($sql);
      if($result->num_rows>0){
        while($row = $result ->fetch_assoc() ){
            $banner = new bannersale($row["id_40"],$row["url_40"]);
            array_push($list,$banner);
          }
        }
        $conn->close();
        return $list;
    }
  }

 ?>

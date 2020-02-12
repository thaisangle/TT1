<?php
  class product
  {
    var $id;
    var $price;
    var $pricesale;
    var $image;
    var $name;

    public function __construct($id,$price,$pricesale,$image,$name)
    {
      $this->id = $id;
      $this->price = $price;
      $this->image = $image;
      $this->pricesale = $pricesale;
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
    public static function getdata($data){
      $conn = product::connect();
      $sql = "SELECT products.id,name, price,pricesale,url FROM `products` JOIN image on products.id = image.id WHERE products.id_category in (SELECT id FROM categories WHERE categories.name ='$data')";
      $list = array();
      $result = $conn->query($sql);
      if($result->num_rows>0){
        while($row = $result ->fetch_assoc() ){
            $product = new product($row["id"],$row["price"],$row["pricesale"],$row["url"],$row["name"]);
            array_push($list,$product);
          }
        }
        $conn->close();
        return $list;
      }

    public static function getrating($data){
      $conn = product::connect();
      $sql = "SELECT id_product,round(AVG(rating),1) as 'rating' FROM `product_rating` WHERE id_product = $data ";
      $list = array();
      $rating = null;
      $result = $conn->query($sql);
      if($result->num_rows>0){
            $row = $result ->fetch_assoc();
            $rating = $row["rating"];

      }
      return $rating;
      $conn->close();
      }
    }

 ?>

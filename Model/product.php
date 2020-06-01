<?php
  include_once('./Model/common.php');
  class product extends common
  {
    public $id;
    public $price;
    public $pricesale;
    public $image;
    public $name;

    public function __construct($id,$price,$pricesale,$image,$name)
    {
      $this->id = $id;
      $this->price = $price;
      $this->image = $image;
      $this->pricesale = $pricesale;
      $this->name = $name;
    }
    public static function getdata($data){
      $conn = common::connect();
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
      $conn = common::connect();
      $sql = "SELECT id_product,round(AVG(rating),1) as 'rating' FROM `product_rating` WHERE id_product = $data ";
      $list = array();
      $rating = null;
      $result = $conn->query($sql);
      if($result->num_rows>0){
            $row = $result ->fetch_assoc();
            $rating = $row["rating"];

      }
      $conn->close();
      return $rating;
      }
      public static function getproducbyid($id){
        $conn = common::connect();
        $sql = "SELECT products.id,name, price,pricesale,url FROM `products` JOIN image on products.id = image.id where products.id = $id ";
        $product = null;
        $result = $conn->query($sql);
        if($result){
          $row = $result ->fetch_assoc();
          $product = new product($row["id"],$row["price"],$row["pricesale"],$row["url"],$row["name"]);
        }
        $conn->close();
        return $product;

      }
    }

 ?>

<?php
  include_once('./Model/common.php');
  /**
   *
   */
  class productDetail extends common
  {
    var $id;
    var $price;
    var $pricesale;
    var $image;
    var $name;
    var $category;
    var $gender;
    var $brand;
    public function __construct($id,$name,$category,$gender,$brand,$price,$pricesale,$image)
    {
      $this->id = $id;
      $this->price = $price;
      $this->image = $image;
      $this->pricesale = $pricesale;
      $this->name = $name;
      $this->category = $category;
      $this->gender = $gender;
      $this->brand = $brand;
    }

    public static function getProductDetail($id){
      $conn = common::connect();
      $sql = "SELECT products.id,products.name,categories.name as category,product_gender.name as gender,brands.name as brand, price,pricesale,url FROM `products` JOIN image on products.id = image.id JOIN brands on products.id_brand = brands.id JOIN categories on products.id_category = categories.id JOIN product_gender on products.id_gender = product_gender.id_gender WHERE products.id = $id";

      $result = $conn->query($sql);
      if($result->num_rows>0){
        $row = $result ->fetch_assoc();
        $productDetail = new productDetail($row["id"],$row["name"],$row["category"],$row["gender"],$row["brand"],$row["price"],$row["pricesale"],$row["url"]);

        $conn->close();
        return $productDetail;
        }
    }
  }

 ?>

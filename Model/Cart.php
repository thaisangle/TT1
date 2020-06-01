<?php
  include_once('../Model/common.php');
  class Cart extends common
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
    public static function getproducbyid($id){
        $conn = common::connect();
        $sql = "SELECT products.id,name, price,pricesale,url FROM `products` JOIN image on products.id = image.id where products.id = $id ";
        $product = null;
        $result = $conn->query($sql);
        if($result){
          $row = $result ->fetch_assoc();
          $product = new Cart($row["id"],$row["price"],$row["pricesale"],$row["url"],$row["name"]);
        }
        $conn->close();
        return $product;

      }
     
}
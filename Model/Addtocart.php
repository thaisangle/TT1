<?php 
    include_once('../Model/Cart.php');
    class Addtocart {
        var $product;
        var $sl;
       

        public function __construct($product,$sl)
        {
            $this->product = $product;
            $this->sl = $sl;

        }

        static function addlan1($cart,$id,$sl){
            $product =(array)(Cart::getproducbyid($id));
            
            $cart[$id] = array(
                "id"=> $product['id'],
                "name"=>$product['name'],
                "image"=>$product['image'],
                "price"=>$product['price'],
                "pricesale"=>$product['pricesale'],
                "sl"=>$sl,
                
            );
            return $cart;
        }
        public function addlann($cart,$id,$sl){
            $product =(array)(Cart::getproducbyid($id));
            if(array_key_exists($id,$cart)){
                $cart[$id]['sl'] +=$sl;
            }
            else{
                $cart[$id] = array(
                    "id"=> $product['id'],
                    "name"=>$product['name'],
                    "image"=>$product['image'],
                    "price"=>$product['price'],
                    "pricesale"=>$product['pricesale'],
                    "sl"=>$sl,
                    
                );
            }
            return $cart;
        }
    }
?>
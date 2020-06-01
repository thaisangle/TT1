<?php 
    session_start();
    include_once('../Model/Cart.php');
    include_once('../Model/Addtocart.php');
    $cart =null;
    /**Neu da ton tai $_SESSION */
    if(isset($_SESSION["cart"])){
        if(isset($_GET['action'])){
            $cart = $_SESSION["cart"];
            
            if($_GET['action']=='sub'){
                if($_GET['sl'] == 1){
                    unset($cart[$_GET['id']]);
                    echo "<pre>";
                     print_r($cart);
                    echo "</pre>";
    
                }
                else{
                    $cart = Addtocart::addlan1($cart,$_GET['id'],$_GET['sl']-1);
                }
            }
            else{
                $cart = Addtocart::addlan1($cart,$_GET['id'],$_GET['sl']+1);
            }
            $_SESSION['cart']=$cart;
            
        }
        else{
            $cart = $_SESSION["cart"];
            $cart =  Addtocart::addlann($cart,$_GET['id'],$_GET['sl']);
            $_SESSION['cart']=$cart;
            //   session_destroy();
        }
        echo "<pre>";
        print_r($cart);
    }
    /**Neu chua ton tai */
    else{
       
        $cart = Addtocart::addlan1($cart,$_GET['id'],$_GET['sl']);
        $_SESSION['cart']=$cart;
    }

    header("Location: ../Gh.php");

?>
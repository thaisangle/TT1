<?php
      session_start();
      include_once('../Model/common.php');
      include_once("../Model/user.php");
      $infomation="";
      if($_SERVER["REQUEST_METHOD"]=="POST"){
         $Username1=$_REQUEST['username'];
         $Password1=$_REQUEST['password'];
         $list = user::getUser();
         $user = user::xacthuc($Username1,$Password1,$list);
         if($user == true){
             $_SESSION["user"]=serialize($user);
             header("location: /TT1/index.php");
         }
         else
             $infomation="Đăng nhập thất bại!. Vui lòng kiểm tra lại thông tin";
      }
      /**
      * tương tự khi login rồi khi gõ trang login thì nó tự chuyển sang index.php
      */
      if(isset($_SESSION["username"])){
        header("Location: ./index.php");
      }
      else{
        include_once("../login.php");
      }
      
 ?>

<?php
include_once('../Model/common.php');
  /**
   *
   */
  class user
  {
    var $username;
    var $password;

    function __construct($username,$Password)
    {
      $this->username = $username;
      $this->password = $Password;
    }

    public static function getUser(){
      $conn = common::connect();
      $sql="select * from user";
      $result = $conn->query($sql);
      $list=[];
      if($result->num_rows>0){
        while($row = $result ->fetch_assoc() ){
            $user = new user($row['username'],$row['password']);
            array_push($list,$user);
          }
        }
        $conn->close();
        return $list;
    }
    /**
     * Xác thực người sử dung
     * @param $username string Tên đăng nhập
     * @param $password string mật khẩu
     * @return User hoặc null nếu không tồn tại
     */
      public static function xacthuc($username,$password,$list){
          foreach ($list as $key => $value) {
            if($value->username === $username && $value->password === $password){
                return true;
            }
            return false;
          }

     }

  }
  

 ?>

<?php
    session_start();
    include_once("./Model/productDetail.php");
    include_once("./Model/product.php");
    include_once("./Public/functionPHP/displayRating.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Shop</title>
  <link rel="stylesheet" href="./Public/owlcarousel/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="./Public/css/style1.css">
  <link rel="stylesheet" href="./Public/css/producDetail.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
  <div style="background-color:#f2f2f2;">
    <!-- HEADER CONTENT -->
        <!-- Header logo black -->
          <?php include_once('./View/Pages/headerblack.php') ?>
            <!-- End Header logo black -->
        <!-- Begin mycontainer -->
    <div class="container mycontainer">
        <!-- begin headerlogo-->
        <?php include_once('./View/Pages/headerlogo.php') ?>
            <!-- end headerlogo-->
        <!-- END HEADER CONTENT -->
      <div class="container">
        <div class="row headericon">
          <a href="index.php"><i class="fa fa-home" aria-hidden="true"></i></a>
          <span class="infont"> ->Cart</span>
        </div>
        <div class="row">
            <div class="col-8  border">
                <?php 
                    $list = $_SESSION['cart'];
                ?>
                <?php 
                    if($list == null){?>
                    <div  class="container" >
                       <div style="color:red;text-align: center;padding: 50px;">
                            <div>Giỏ Hàng Trống.Vui Lòng Mua Thêm Sản Phẩm</div> 
                            <div><a href="./" class="btn btn-success">Mua Thêm!</a></div>
                      </div>
                        
                    </div>
                        
                    <?php }
                    $sum = 0;
                    foreach($list as $key => $value){
                        $sum += $value['price']*$value['sl'];    
                    ?>
                            
                        <div class="row" >
                            <div class="col"><?php echo $value['name']?></div>
                            <div class="col"><img class="img-thumbnail" src="<?php echo $value['image']?>" style="height:100px;width:100px;"></div>
                            <div class="col">
                                <div style="color:red;">
                                    <?php echo number_format($value['price'])." Đ"?>
                                </div>
                                <div style="color: gray;text-decoration:line-through;"> 
                                <?php echo number_format($value['pricesale'])." Đ"?>
                                </div>
                            </div>
                            <div class="col ">     
                                <form action="./Controller/controlleraddtocard.php">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button type="submit" class="btn btn-outline-secondary sub">-</button>
                                        <input type="hidden" class="input_cart" value="<?php echo $value['id'] ?>" name="id" />
                                        <input type="hidden" class="input_cart" id="test" value="<?php echo $value['sl'] ?>" name="sl" />
                                        <input type="number" class="input_cart" id="test" value="<?php echo $value['sl'] ?>"  />
                                        <input type="hidden" class="input_cart" value="sub" name="action"  />
                                    </div>
                               
                                </form>
                                <form action="./Controller/controlleraddtocard.php">
                                    <div class="input-group-append">
                                        <input type="hidden" class="input_cart" id="test" value="<?php echo $value['id'] ?>" name="id" />
                                        <input type="hidden" class="input_cart" id="test" value="<?php echo $value['sl'] ?>" name="sl" />
                                        <input type="hidden" class="input_cart" value="plus" name="action"  />
                                        <button type="submit" class="btn btn-outline-secondary plus">+</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                        <hr>
                    <?php }?>
            </div>
            <div class="col-4   ">
                <div class="border" style="padding: 30px;">
                    <h5>
                    Order Summary:
                    </h5>
                    <div>Total:<?php echo number_format($sum)." Đ" ?></div>
                    <button class="btn-warning text-center  btn-sm btn-block" sty>CONFIRM CART</button>
                </div>
                
            </div>
          
            <!-- End row -->
        </div>
      </div>
      <!-- End Conatiner -->
    </div>
    <!-- End mycontainers -->
    <!-- Footer -->
    <?php include_once('View/Pages/footer.php') ?>
      <!-- end Footer -->
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="./Public/owlcarousel/owl.carousel.min.js"></script>
  <script src="./Public/js/index.js"></script>
  <script src="./Public/js/index1.js"></script>
  <script src="./Public/js/formatNumber.js"></script>
</body>
</html>

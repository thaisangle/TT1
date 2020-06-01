<?php
  if(!isset($_GET['id'])){
    header('location: index.php');
  }
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
          <span class="infont"> >ProductDetail</span>
        </div>
        <div class="row">
          <?php
            $list = productDetail::getProductDetail($_GET['id']);
          ?>
          <!-- Begin image -->
          <div class="col-7">
            <img src="<?php echo $list->image?>" alt="" height="auto" width="100%">
          </div>
          <!-- End Image -->
          <!-- Begin Detail -->
          <div class="col-5 fontproduct">
              <span class="nameproduct"><?php echo $list->name?></span>
              <div>
                <span class="innghien">Category:</span><?php echo $list->category?>
                <span class="innghien">Fashion:</span><?php echo $list->gender?>
              </div>
              <div>
              <span class="innghien">rating:</span>
                <?php
                      $rating = product::getrating($list->id);
                        displayrating1($rating);
                    ?>
              </div>
              <div class="price">
                <span><?php echo number_format($list->price)?>Đ</span>
                  <!-- lấy dữ liệu giá của sản phẩm để sử lý js -->
                  <input id="price" value="<?php echo ($list->price)?> " type='hidden' />
                  <!-- End lay dl -->
                <span  class="gachchan">
                  <?php echo number_format($list->pricesale)?>Đ
                </span>
              </div>
            <!-- FORM ADD TO CART -->
            <form action="./Controller/controlleraddtocard.php">
              <!-- Lấy tham số id để truyền vào giỏ hàng -->
              <input value="<?php echo $list->id ?>" name="id" type="hidden"/>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-outline-secondary sub">-</button>
                    </div>
                    <input type="number" class="input_cart" id="test" value="1" name="sl" />
                    <div class="input-group-append">
                        <button type="button" class="btn btn-outline-secondary plus">+</button>
                    </div>
                  </div>
                  <div class="totalprice">
                    Total:<span id="totalprice"></span>Đ
                  </div>
                  <div>
                      <button class="btn btn-success btnfull" type="submit">
                        + ADD TO CART
                      </button>
                </div>
              </form>
              <!-- END FORM ADD TO CART -->

          </div>
          <!-- End Detail -->
        </div>
        <!-- End row -->
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

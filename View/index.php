<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Shop</title>

  <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/style1.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
</head>
<body>
  <div style="background-color:#f2f2f2;">
    <!-- Header logo black -->
      <?php include_once('web/headerblack.php') ?>
        <!-- End Header logo black -->
    <!-- Begin mycontainer -->
    <div class="container mycontainer">
      <!-- BEGIN HEADER LOGO -->
      <?php include_once('web/headerlogo.php') ?>
          <!-- END HEADER LOGO -->
      <!--Begin body slide  -->
        <?php include_once('web/bodyslide.php') ?>
          <!-- End body slide -->
      <!-- BEGIN CONTENT NEWARRIVALS -->
        <?php include_once('web/testbodyNewarrivals.php') ?>
          <!-- END CONTENT NEWARRIVALS -->
      <!-- BANNER -->
      <div>
        <img src="img/banner70.png" class="banner">
      </div>
          <!-- END BANNER -->
      <!-- BEGIN SLIDE2 -->
        <?php include_once('web/bodyslide2test.php') ?>
          <!-- END SLIDE2 -->
    </div>
          <!-- End mycontainers -->
      <!-- Footer -->
        <?php include_once('web/footer.php') ?>
          <!-- end Footer -->
  </div>
  <?php
      function displayrating($rating){
        if($rating != null){
          for($i=0;$i<round($rating);$i++){
              echo "<span class='fa fa-star checked'></span>";
            }
          for($i=0;$i< 5-round($rating);$i++){
            echo "<span class='fa fa-star'></span>";
          }
            echo "<br><i><small>($rating/5.0)</small></i>";
        }
        else{
          for($i=0;$i<5;$i++){
            echo "<span class='fa fa-star'></span>";
          }
          echo "<br><i><small>(Chưa có đánh giá!)</small></i>";

        }
      }
  ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="owlcarousel/owl.carousel.min.js"></script>
  <script src="js/index.js"></script>
  <script src="js/index1.js"></script>
</body>
</html>

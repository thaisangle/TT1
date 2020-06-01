<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Shop</title>

  <link rel="stylesheet" href="./Public/owlcarousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="./Public/owlcarousel/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="./Public/css/style1.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php include_once("./Public/functionPHP/displayRating.php")?>;
  <div style="background-color:#f2f2f2;">
    <!-- Header logo black -->
      <?php include_once('./View/Pages/headerblack.php') ?>
        <!-- End Header logo black -->
    <!-- Begin mycontainer -->
    <div class="container mycontainer">
      <!-- BEGIN HEADER LOGO -->
      <?php include_once('View/Pages/headerlogo.php') ?>
          <!-- END HEADER LOGO -->
      <!--Begin body slide  -->
        <?php include_once('View/Pages/bodyslide.php') ?>
          <!-- End body slide -->
      <!-- BEGIN CONTENT NEWARRIVALS -->
        <?php include_once('View/Pages/testbodyNewarrivals.php') ?>
          <!-- END CONTENT NEWARRIVALS -->
      <!-- BANNER -->
      <div>
        <img src="Public/img/banner70.png" class="banner">
      </div>
          <!-- END BANNER -->
      <!-- BEGIN SLIDE2 -->
        <?php include_once('View/Pages/bodyslide2test.php') ?>
          <!-- END SLIDE2 -->
    </div>
          <!-- End mycontainers -->
      <!-- Footer -->
        <?php include_once('View/Pages/footer.php') ?>
          <!-- end Footer -->
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="./Public/owlcarousel/owl.carousel.min.js"></script>
  <script src="./Public/js/index.js"></script>
  <script src="./Public/js/index1.js"></script>
</body>
</html>

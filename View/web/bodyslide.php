<!-- BEGIN SLIDE -->
<div class="container row">
  <div  class="col-9 slidecol-8">
    <div id="demo" class="carousel slide" data-ride="carousel">
      <!-- The slideshow -->
      <div class="carousel-inner">
        <?php
          include_once("../Model/bannersale.php");
          $list = bannersale::getbanner80();
          foreach ($list as $key => $value) {
            if($key==0){
                echo "  <div class='carousel-item active'>
                    <img src='$value->url' alt='Los Angeles' width='1200' height='500'>
                  </div> ";
              }
            else{
              echo " <div class='carousel-item'>
                  <img src='$value->url' alt='Los Angeles' width='1200' height='500'>
                </div> ";
            }
          }
        ?>
      </div>
    </div>
  </div>
  <div class="col-3 slidecol-4">
    <?php
        $list = bannersale::getBanner40();
        foreach ($list as $key => $value) {
          // code...
          echo "  <div class='col stylecol'>
              <img src='$value->url' alt='' class='styleimg'>
              <div class='fontcol'>
                 <a href='#'>SHOP NOW >></a>
              </div>
            </div>";
        }
    ?>
  </div>
</div>
<!-- END SLIDE -->
<div id="slider">
    <div class="container owl-carousel owl-theme">
      <?php
        include_once("../Model/brand.php");
        $list = brand::getbrand();
        foreach ($list as $key => $value) {
          echo "<div class='col item'>
              <a href='#'><img src='$value->image' alt='' class='fontimg'></a>
            </div>";
        }
      ?>
      <!-- BEGIN LAYOUT -->
    </div>
</div>
<!-- END LAYOUT -->
<!-- BEGIN BASHOP -->
<div class="row bashop">
  <?php
      include_once("../Model/gender.php");
      $list = gender::getgender();
      foreach ($list as $key => $value) {
        echo "
        <div class='col motshop'>
          <div>
            <img src='$value->image' alt='' class='image'>
          </div>
          <div class='overlay'>
            SHOP <span>$value->name's</span>
          </div>
        </div>";
      }
    ?>
</div>
<!-- END BASHOP -->

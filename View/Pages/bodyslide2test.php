<ul class="nav nav-tabs fitnewarrivals">
  <li class="fitnewarrivals-child" id="t1">
    <a href="#s1"> FEATURED </a><span class="fitnewarrivals-child"> |</span>
  </li>
  <li class="fitnewarrivals-child" id="t2">
    <a href="#s2"> NEW VARRIVALS  </a><span class="fitnewarrivals-child"> |</span>
  </li>
  <li  class="fitnewarrivals-child" id="t3">
    <a href="#s3"> BEST SELLERS</a><span class="fitnewarrivals-child">
</ul>
<div id="tabs-content">
    <div class="owl-carousel owl-theme " id="tab1">
      <?php
            $list = product::getdata('FEATURED');
            foreach($list as $key =>$value){?>
              <div class="col content-newarivals item">
                <div>
                  <a href="/TT1/detailProduct.php?id=<?php echo $value->id?>">
                    <img src="<?php echo $value->image?>" alt="" class="img_newarrivals">
                  </a>
                </div>
                <div>
                <?php echo $value->name?>
                </div>
                <div>
                  <?php $rating = product::getrating($value->id);
                    displayrating1($rating);
                   ?>
                </div>
                <div>
                  <span><?php echo number_format($value->price)."Đ"?></span>
                  <span  class="gachchan">
                    <?php echo number_format($value->pricesale)."Đ"?>
                  </span>
                </div>
                <div class="ahi">
                  <a href="./Controller/controlleraddtocard.php?id=<?php echo $value->id ?>&sl=1"><button class="newarivals"><img src="Public/img/addtocart.png" alt=""></button></a>
                  <a href="./Controller/controlleraddtocard.php"><button class="newarivals"><img src="Public/img/buttonheart.png" alt=""></button></a>
                  <a href="./Controller/controlleraddtocard.php"><button class="newarivals"><img src="Public/img/thitruong.png" alt=""></button></a>
                </div>
              </div>
          <?php } ?>
    </div>
    <div class="owl-carousel owl-theme " id="tab2">
      <?php
            $list = product::getdata('NEW VARRIVALS');
            foreach($list as $key =>$value){?>
              <div class="col content-newarivals item">
                <div>
                  <a href="/TT1/detailProduct.php?id=<?php echo $value->id?>">
                    <img src="<?php echo $value->image?>" alt="" class="img_newarrivals">
                  </a>
                </div>
                <div>
                <?php echo $value->name?>
                </div>
                <div>
                  <?php $rating = product::getrating($value->id);
                    displayrating1($rating);
                   ?>
                </div>
                <div>
                  <?php echo number_format($value->price)."Đ"?>
                  <span  class="gachchan">
                  <?php echo number_format($value->pricesale)."Đ"?>
                  </span>
                </div>
                <div class="ahi">
                <a href="./Controller/controlleraddtocard.php?id=<?php echo $value->id ?>&sl=1"><button class="newarivals"><img src="Public/img/addtocart.png" alt=""></button></a>
                  <a href="./Controller/controlleraddtocard.php"><button class="newarivals"><img src="Public/img/buttonheart.png" alt=""></button></a>
                  <a href="./Controller/controlleraddtocard.php"><button class="newarivals"><img src="Public/img/thitruong.png" alt=""></button></a>
                </div>
              </div>
          <?php } ?>
    </div>
    <div class="owl-carousel owl-theme " id="tab3">
      <?php

            $list = product::getdata('BEST SELLERS');
            foreach($list as $key =>$value){?>
              <div class="col content-newarivals item">
                <div>
                  <a href="/TT1/detailProduct.php?id=<?php echo $value->id?>">
                    <img src="<?php echo $value->image?>" alt="" class="img_newarrivals">
                  </a>
                </div>
                <div>
                <?php echo $value->name?>
                </div>
                <div>
                  <?php $rating = product::getrating($value->id);
                    displayrating1($rating);
                   ?>
                </div>
                <div>
                  <?php echo number_format($value->price)."Đ"?>
                  <span  class="gachchan">
                  <?php echo number_format($value->pricesale)."Đ"?>
                  </span>
                </div>
                <div class="ahi">
                <a href="./Controller/controlleraddtocard.php?id=<?php echo $value->id?>&sl=1"><button class="newarivals"><img src="Public/img/addtocart.png" alt=""></button></a>
                  <a href="./Controller/controlleraddtocard.php"><button class="newarivals"><img src="Public/img/buttonheart.png" alt=""></button></a>
                  <a href="./Controller/controlleraddtocard.php"><button class="newarivals"><img src="Public/img/thitruong.png" alt=""></button></a>
                </div>
              </div>
          <?php } ?>
    </div>
</div>

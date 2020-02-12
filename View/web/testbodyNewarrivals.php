<?php
  include_once('../Model/product.php');
 ?>
<ul class=" nav nav-tabs fitnewarrivals">
  <li class=" float-left ">
    FEATURED
  </li>
</ul>
<div id="slide_newarivals">
  <div class=" owl-carousel owl-theme fontnewarivals ">
    <?php
          $list = product::getdata("FEATURED");
          foreach($list as $key =>$value){?>
            <div class="col content-newarivals item">
              <div>
                <img src="<?php echo $value->image?>" alt="" class="img_newarrivals">
              </div>
              <div>
              <?php echo $value->name?>
              </div>
              <div>
                <?php $rating = product::getrating($value->id);
                  displayrating($rating);
                 ?>
              </div>
              <div>
                <span><?php echo $value->price?>.000đ</span>
                <span  class="gachchan">
                  <?php echo $value->pricesale?>.000đ
                </span>
              </div>
              <div class="ahi">
                <button class="newarivals"><img src="./img/addtocart.png" alt=""></button>
                <button class="newarivals"><img src="./img/buttonheart.png" alt=""></button>
                <button class="newarivals"><img src="./img/thitruong.png" alt=""></button>
              </div>
            </div>
        <?php } ?>
  </div>
</div>

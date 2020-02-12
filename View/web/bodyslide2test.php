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
    <div class="owl-carousel owl-theme " id="tab2">
      <?php
            $list = product::getdata('NEW VARRIVALS');
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
    <div class="owl-carousel owl-theme " id="tab3">
      <?php
            $list = product::getdata('BEST SELLERS');
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

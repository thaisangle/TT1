<?php
function displayrating1($rating){
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

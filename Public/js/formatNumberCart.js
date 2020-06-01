/*
- nếu là input muốn lấy value của nó thì dùng val() hoặc set value của nó cũng dùng val trong js
- nếu là một thẻ bình thường lấy text của nó dùng document.getElementById.value;
 */
 // bắt sự kiện

 $("#test").on("change",function(){
    changesl();
  });
  // hàm formatnumber format số
  function formatNumber(num) {
      return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
    }
  function changesl(){
    var price = parseInt($('#price').val());
    var sl = parseInt($(".input_cart").val());
    var total = price * sl;
    $('#totalprice').text(formatNumber(total));
    console.log(price + " - "+sl+" - " + total);
  }
  // beign :in gia sp vao total
  var price = $('#price').val();
  $('#totalprice').text(formatNumber(price));
  //end :in gia sp vao total
  
  $(document).ready(function(){
    // plus
    $(".plus").click(function(){
      var sl = parseInt($(".input_cart").val());// lấy value của input số lượng
      if(sl < 99){
        $('#test').val(sl+1); // set value của input số lượng
        $('#totalprice').text(formatNumber(price * ( sl + 1)));
        }
    });
    // substact
    $(".sub").click(function(){
      var sl = parseInt($(".input_cart").val());// lấy value của input số lượng
      if(sl > 1){
        $('#test').val(sl-1);  // set value của input số lượng
        $('#totalprice').text(formatNumber(price * ( sl - 1)));
        }
    });
   
  
  
  });
  
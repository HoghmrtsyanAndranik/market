$(document).ready(function(){
$('.item_image').click(function(){

let src=$(this).prev().attr('src');
   $.ajax({
      url:'/deleteitemimage',
      type:'get',
      data:{src:src},
      success:function(d){
         alert(d)

      }




   })





})





})
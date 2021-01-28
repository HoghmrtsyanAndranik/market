$(document).ready(function(){

 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });



$('.item_image').click(function(){

let src=$(this).prev().attr('src');
   $.ajax({
      url:'/deleteitemimage',
      type:'post',
      data:{src:src},
      success:function(d){
         location.reload();

      }




   })





})
$('.del_product').click(function(){

let id=$(this).parents('tr').attr('id');
   $.ajax({
      url:'/deleteproduct',
      type:'get',
      data:{id:id},
      success:function(d){
      	console.log(d);
          //alert(d)
        //location.reload();

      }




   })





})




})
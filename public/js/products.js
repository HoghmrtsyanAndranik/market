$(document).ready(function(){

 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

$('.item_image').click(function(){
alert(base_url)
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
      	location.reload();
      }
   })
})
$('.update_product').click(function(event){
event.preventDefault();	
let name=$('.product-title').text();
let description=$('.product-description').text();
let count=$('.product-count').text();
let price=$('.product-price').text();

   $.ajax({
      url:'/updateproduct',
      type:'post',
      data:{name:name,description:description,count:count,price:price},
      success:function(d){
      	 $('#price_error').html('');
      	 $('#name_error').html('');
      	 $('#description_error').html('');
      	 $('#count_error').html('');

      	if(d.success==false){

      	    if(d[0].price!=undefined)
      		    $('#price_error').html(d[0].price[0])
       		if(d[0].name!=undefined)
      	        $('#name_error').html(d[0].name[0])
      	    if(d[0].description!=undefined)
      	        $('#description_error').html(d[0].description[0])
      	    if(d[0].count!=undefined)
      	        $('#count_error').html(d[0].count[0])
      }


      }
   })
})

$('.add_to_cart').click(function(){

    let id=$(this).attr('id');
    $.ajax({
        url:'/addtocart',
        type:'post',
        data:{product_id:id},
        success:function(d){
      	   //alert(d)
      	   console.log(d);
        }
   })
})
$('.del_cart').click(function(){
    let id=$(this).parents('tr').attr('id');
     $.ajax({
        url:base_url+'/deletefromcart',
        type:'post',
        data:{id:id},
        success:function(d){
      	  location.reload();
        }
   })

})
$('.update_cart').change(function(){
	 let id=$(this).parents('tr').attr('id');
     let count=$(this).val();
     $.ajax({
        url:base_url+'/updatecart',
        type:'post',
        data:{id:id,count:count},
        success:function(d){
          location.reload();
        }
   })

})



$('.add_wish').click(function(){

   let id=$(this).attr('id');
      $.ajax({
         url:'/addtowishlist',
         type:'post',
         data:{product_id:id},
         success:function(d){
      	    //alert(d)
      	   console.log(d);
        }
    })
})
$('.del_wish').click(function(){

   let id=$(this).parents('tr').attr('id');
      $.ajax({
         url:'/delwishlist',
         type:'post',
         data:{id:id},
         success:function(d){
      	   location.reload();
      	   console.log(d);
        }
    })
})

})
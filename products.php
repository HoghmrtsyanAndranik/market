
@section('mysection')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="col-md-2 column productbox">
    <img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive">
    <div class="producttitle">Product 2</div>
    <div class="productprice"><div class="pull-right"><a href="#" class="btn btn-danger btn-sm" role="button">BUY</a></div><div class="pricetext">£8.95</div></div>
</div>
<div class="col-md-2 column productbox">
    <img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive">
    <div class="producttitle">Product 2</div>
    <div class="productprice"><div class="pull-right"><a href="#" class="btn btn-danger btn-sm" role="button">BUY</a></div><div class="pricetext">£8.95</div></div>
</div>
<div class="col-md-2 column productbox">
    <img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive">
    <div class="producttitle">Product 3</div>
    <div class="productprice"><div class="pull-right"><a href="#" class="btn btn-danger btn-sm" role="button">BUY</a></div><div class="pricetext">£8.95</div></div>
</div>
<div class="col-md-2 column productbox">
    <img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive">
    <div class="producttitle">Product 4</div>
    <div class="productprice"><div class="pull-right"><a href="#" class="btn btn-danger btn-sm" role="button">BUY</a>
      <a href="#" class="btn btn-danger btn-sm" role="button">BUY</a>  
    </div><div class="pricetext">£8.95</div></div>
</div>

<style type="text/css">
 .productbox {
    background-color:#ffffff;
    padding:10px;
    margin-bottom:10px;
    -webkit-box-shadow: 0 8px 6px -6px  #999;
       -moz-box-shadow: 0 8px 6px -6px  #999;
            box-shadow: 0 8px 6px -6px #999;
}

.producttitle {
    font-weight:bold;
    padding:5px 0 5px 0;
}

.productprice {
    border-top:1px solid #dadada;
    padding-top:5px;
}

.pricetext {
    font-weight:bold;
    font-size:1.4em;
}   


</style>
@endsection
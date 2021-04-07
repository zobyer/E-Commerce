@extends("master")
@section("content")
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail_img" src="{{$product_detail['gallery']}}" alt="{{$product_detail['name']}}">
        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a>
            <h2>{{$product_detail['name']}}</h2>
            <h3>{{$product_detail['price']}}</h3>
            <h4>{{$product_detail['description']}}</h4>
            <br><br>
            <form action="\add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$product_detail['id']}}">
                <button class="btn btn-primary">Add to Cart</button>
            </form>
            <br><br>
            <button class="btn btn-success">Buy Now</button>
        </div>
    </div>
</div>
@endsection
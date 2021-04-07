<?php
$count=0;
$total_price=0;
?>

@extends("master")
@section("content")
<div class="">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Serial No</th>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
            <th scope="col">Category</th>
            <th scope="col">Remove From Cart</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($products as $item)
          
            <tr>
              <th scope="row">{{$count = $count + 1}}</th>
              <td>{{$item->name}}</td>
              <td>{{$item->price}}</td>
              <td>{{$item->category}}</td>
              <td><a href="/removecart/{{$item->cart_id}}"><button class="btn btn-warning">Remove</button></a></td>
            </tr>
            @php
            $total_price = $total_price+ $item->price;
            @endphp
          @endforeach
          <tr>
            <th scope="row">Total Price</th>
              <td></td>
              <td></td>
              <td >{{$total_price}}</td>
          </tr>
        </tbody>
      </table>
</div>
@endsection
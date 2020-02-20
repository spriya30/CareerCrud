@extends('products.app')

@section('content')
<div class="form-container show">
    <h3 class="text-muted">Product Details</h3><br>
    <i><p>Title : {{$details->title}}</p>
    <p>Price : {{$details->price}}</p>
    <p>Description : {{$details->description}}</p> 
    <p>Image : {{$details->image}}</p> 
    <p>Quantity : {{$details->quantity}}</p> 
    <a href="/table" class="btn btn-success"style="float:right; line-height:3px;">Close</a></i>
</div>
@endsection
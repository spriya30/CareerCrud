@extends('products.app')

@section('content')
<div class="container">
<div style="float: right;"><a href="/table/add"><button class="btn btn-success">Add</button></a></div><br>
  <h2>Products Table</h2>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Title</th>
        <th>Price</th>
        <th>Description</th>
        <th>Image</th>
        <th>Quantity</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
      <tr>
        <td>{{$product->title}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->description}}</td>
        <td>{{$product->image}}</td>
        <td>{{$product->quantity}}</td>
        <td><a href="/table/info/{{$product->id}}" class="btn btn-info">View</a>
            <a href="/table/edit/{{$product->id}}" class="btn btn-success">Edit</a>
            <a href="/table/delete/{{$product->id}}" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
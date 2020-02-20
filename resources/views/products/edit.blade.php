@extends('products.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">
			<form class="form-container" action="/update/{{$product->id}}" method="post">
				{{csrf_field()}}
				<div class="form-group">
                    <label for="title">Title: </label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title"  value="{{ $product->title }}" required>
                </div>
                <div class="form-group">
                    <label for="price">Price: </label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price" value="{{ $product->price }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Description </label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Description" value="{{ $product->description }}" >
                </div>
                <div class="form-group">
                    <label for="image">Image </label>
                    <input type="text" class="form-control" id="image" name="image" placeholder="Image" value="{{ $product->image }}">
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity </label>
                    <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantity" value="{{ $product->quantity }}">
                </div>
				<div class="form-group">
					<button type="submit" class="btn btn-success btn-block">Update</button>
				</div>
			</form>
        </div>
    </div>
</div>
@endsection
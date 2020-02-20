@extends('products.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <form class="form-container" method="POST" action='/login'>
                {{csrf_field()}}
                <div class="form-group">
                    <label for="title">Title: </label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" required>
                </div>
                <div class="form-group">
                    <label for="price">Price: </label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price" required>
                </div>
                <div class="form-group">
                    <label for="description">Description </label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Description">
                </div>
                <div class="form-group">
                    <label for="image">Image </label>
                    <input type="text" class="form-control" id="image" name="image" placeholder="Image">
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity </label>
                    <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantity">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
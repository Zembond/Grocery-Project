@extends('admin_nav')

@section('admin_content')
    <div class="container mt-5">
        <div class="row mt-4">
            <h2>{{ $item->name }}</h2>
            <div class="col-md-9 offset-1">
                <form action="/editproduct" method="post">
                    @csrf
                    <input type="hidden" name="edit_item_id" value="{{ $item->id }}">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="edit_item_name" value="{{ $item->name }}">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="edit_item_desc">{{ $item->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Picture URL</label>
                        <input type="text" class="form-control" name="edit_item_picture" value="{{ $item->picture_url }}">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="number" class="form-control" name="edit_item_price" value="{{ $item->price }}">
                    </div>
                    <div class="form-group">
                        <label>Nutrition</label>
                        <textarea class="form-control" name="edit_item_nutrition">{{ $item->nutrition }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <input type="number" class="form-control" name="edit_item_cat" value="{{ $item->category_id }}">
                    </div>
                    <button type="submit" class="btn btn-success float-right">Edit Product</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('admin_nav')

@section('admin_content')
    <div class="container mt-5">
            <div class="row mt-4">
                <h2>{{ $cat->name }}</h2>
                <div class="col-md-9 offset-1">
                    <form action="/editcategory" method="post">
                        @csrf
                        <input type="hidden" name="edit_category_id" value="{{ $cat->id }}">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="edit_category_name" value="{{ $cat->name }}">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="edit_category_desc">{{ $cat->description }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-success float-right">Edit Category</button>
                    </form>
                </div>
            </div>
    </div>
@endsection

@extends('admin_nav')

@section('admin_content')
<div class="container mt-5">
    <div class="justify-content-between">
        <h2>Categories</h2>
        <button type="button" class="btn btn-info mt-3" data-toggle="modal" data-target="#addCat">
            Add Category
        </button>
        <div class="row mt-4">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Details</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cats as $cat)
                        <tr>
                            <td>{{ $cat->id }}</td>
                            <td>{{ $cat->name }}</td>
                            <td>{{ $cat->description }}</td>
                            <td><a class="btn btn-sm btn-info" href="/categorydetails/{{ $cat->id }}">Details</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addCat" tabindex="-1" aria-labelledby="addCat" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addItemLabel">New Item</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <form action="/addcategory" class="w-100" method="post">
                        @csrf
                        <p style="width: 100%;">Name</p>
                        <div class="form-group w-100"><input type="text" name="cat_name"></div>
                        <p style=" width: 100%;">Description</p>
                        <div class="form-group w-100"> <textarea name="cat_description" class="form-control"></textarea></div>
                        <button type="submit" class="btn btn-success float-right">Add Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

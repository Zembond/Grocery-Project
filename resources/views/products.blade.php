@extends('admin_nav')

@section('admin_content')
    <div class="container mt-5">
        <div class="justify-content-between">
            <h2>Products</h2>
            <button type="button" class="btn btn-info mt-3" data-toggle="modal" data-target="#addProduct">
                Add Product
            </button>
            <div class="row mt-4">
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Details</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->category_id }}</td>
                                <td><a class="btn btn-sm btn-info" href="/productdetails/{{ $item->id }}">Details</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="modal fade" id="addProduct" tabindex="-1" aria-labelledby="addProduct" aria-hidden="true">
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
                        <form action="/addproduct" class="w-100" method="post">
                            @csrf
                            <p style="width: 100%;">Name</p>
                            <div class="form-group w-100"><input type="text" name="item_name"></div>
                            <p style=" width: 100%;">Description</p>
                            <div class="form-group w-100"> <textarea name="item_description" class="form-control"></textarea></div>
                            <p style="width: 100%;">Picture URL</p>
                            <div class="form-group w-100"><input type="text" name="item_picture"></div>
                            <p style="width: 100%;">Price</p>
                            <div class="form-group w-100"><input type="number" min="0" name="item_price"></div>
                            <p style="width: 100%;">Nutrition</p>
                            <div class="form-group w-100"><input type="text" name="item_nutrition"></div>
                            <p style="width: 100%;">Category</p>
                            <div class="form-group w-100"><input type="number" min="0" max="10" name="item_cat"></div>
                            <button type="submit" class="btn btn-success float-right">Add Product</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

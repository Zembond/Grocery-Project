@extends('admin_nav')

@section('admin_content')

    <section class="container mt-5">
        <div class="admin-heading">
            <h3>Site Administration</h3>
        </div> <!-- admin-heading -->
        <div class="category-description py-3 mt-5">
            <h5 class="ml-3">Authentication and Authorization</h5>
        </div> <!-- category-description -->
        <div class="category-item mt-3">
            <div class="d-flex justify-content-start ml-3 mt-3">
                <h6><a class="cat-link" href="#">Users</a></h6>
            </div>
            <div class="d-flex justify-content-end mb-5">
                <a class="cat-link mr-3" href="#">Add</a>
                <a class="cat-link" href="#">Change</a>
            </div>
        </div> <!-- category-item -->
        <div class="category-description py-3 mt-5">
            <h5 class="ml-3">Database</h5>
        </div> <!-- category-description -->
        <div class="category-item mt-3">
            <div class="d-flex justify-content-start ml-3 mt-3">
                <h6><a class="cat-link" href="/products">Products</a></h6>
            </div>
            <div class="d-flex justify-content-end mb-3">
                <a class="cat-link mr-3" href="/products">Add</a>
                <a class="cat-link" href="/products">Change</a>
            </div>
        </div> <!-- category-item -->
        <div class="category-item mt-3">
            <div class="d-flex justify-content-start ml-3 mt-3">
                <h6><a class="cat-link" href="/categories">Categories</a></h6>
            </div>
            <div class="d-flex justify-content-end mb-3">
                <a class="cat-link mr-3" href="/categories">Add</a>
                <a class="cat-link" href="/categories">Change</a>
            </div>
        </div> <!-- category-item -->
        <div class="category-item mt-3">
            <div class="d-flex justify-content-start ml-3 mt-3">
                <h6><a class="cat-link" href="/orders">Orders</a></h6>
            </div>
            <div class="d-flex justify-content-end mb-3">
                <a class="cat-link mr-3" href="/orders">Add</a>
                <a class="cat-link" href="/orders">Change</a>
            </div>
        </div> <!-- category-item -->
    </section> <!-- section container -->

@endsection

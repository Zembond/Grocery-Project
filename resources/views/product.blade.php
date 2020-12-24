@extends('wrap')

@section('main_content')

<section>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-2">
                <div class="side-navigation">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" style="background-color: #79eb7d;">
                            Categories
                        </li>
                        @foreach($cats as $cat)
                            <li class="list-group-item li-back">
                                <a class="side-nav-link" href="/category/{{ $cat->id }}">{{ $cat->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div> <!-- side navigation -->
                <div class="side-navigation mt-4">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" style="background-color: #79eb7d;">
                            Other Caterories
                        </li>
                        <li class="list-group-item li-back">
                            <a class="side-nav-link" href="#">About Us</a>
                        </li>
                        <li class="list-group-item li-back">
                            <a class="side-nav-link" href="/team">Our Team</a>
                        </li>
                    </ul>
                </div> <!-- side navigation -->
            </div> <!-- col-md-3 -->
            <div class="col-md-6">
                <img src="{{ $item->picture_url }}"  width="500px" height="500px" class="img-thumbnail" alt="...">
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="product-info mb-2">
                            <h3>{{ $item->name }}</h3>
                        </div>
                        <div class="product-info mt-2">
                            <h4>Description</h4>
                            <p>{{ $item->description }}</p>
                        </div>
                        <div class="product-info mt-2">
                            <h4>Nutrition</h4>
                            <p>{{ $item->nutrition }}</p>
                        </div>
                    </div> <!-- col-md-12 -->
                </div> <!-- row -->
            </div> <!-- col-md-6 -->
            <div class="col-md-4">
                <div>
                    <h3>{{ $item->name }}</h3>
                    <p>Price: {{ $item->price }}KZT / KG</p>
                    <form class="form" action="{{ route('basket-add', $item) }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-success mb-2">Add to Cart</button>
                    </form>
                </div>
            </div> <!-- col-md-4 -->
        </div> <!-- row -->
    </div> <!-- container -->
</section> <!-- product info -->

@endsection

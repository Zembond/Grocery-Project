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
            <div class="col-md-9 offset-1">
                <div class="row">
                    @foreach($items as $item)
                        <div class="col-md-4 mt-3">
                            <div class="card">
                                <img src="{{ $item->picture_url }}"  width="250px" height="250px" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->name }}</h5>
                                    <p class="card-text">{{ $item->price }} KZT</p>
                                    <div class="but-holder">
                                        <form action="{{ route('basket-add', $item) }}" method="post">
                                            @csrf
                                            <a href="/product/{{ $item->id }}" class="btn btn-primary">View Details</a>
                                            <button type="submit" class="btn btn-warning">Add to Cart</button>
                                        </form>
                                    </div>
                                </div>
                            </div> <!-- product card -->
                        </div> <!-- inner col-md-4 -->
                    @endforeach
                </div> <!-- inner row -->
                <nav class="mt-4" aria-label="Pagination">
                    <ul class="pagination page-nav">
                        <li class="page-item">
                            <a class="page-link" href="#">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item" aria-current="page">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav> <!-- pagination -->
            </div> <!-- col-md-9 -->
        </div> <!-- row -->
    </div> <!-- container -->
</section> <!-- Main content Section -->

@endsection



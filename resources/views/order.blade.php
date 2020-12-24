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
                    <form action="/basket/confirm" method="post">
                        @csrf
                        <h2 class="text-center mb-3">Confirm order</h2>
                        <h3 class="text-center">Total order value: <b>{{ $order->getFullPrice() }}</b></h3>
                        <div class="form-group mt-3">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Phone number</label>
                            <input type="text" class="form-control" name="phone">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div> <!-- col-md-9 -->
            </div> <!-- row -->
        </div> <!-- container -->
    </section> <!-- Main content Section -->

@endsection

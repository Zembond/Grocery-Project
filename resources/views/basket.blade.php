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
                    <h3 class="text-center">Create Order</h3>
                    <table class="table table-stripped">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Amount</th>
                            <th>Price</th>
                            <th>Cost</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(!is_null($order))
                        @foreach($order->products as $item)
                            <tr>
                                <td>
                                    <a href="/product/{{ $item->id }}">
                                        <img height="56px" src="{{ $item->picture_url }}">
                                        {{ $item->name }}
                                    </a>
                                </td>
                                <td>
                                    <span class="badge">1</span>
                                    <div class="btn-group">
                                        <a type="button" class="btn btn-danger" href="#">
                                            <span class="glyphicon glyphicon-minus" aria-hidden="true">-</span>
                                        </a>
                                        <form action="{{ route('basket-add', $item) }}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true">+</span></button>
                                        </form>
                                    </div>
                                </td>
                                <td>{{ $item->price }} KZT</td>
                                <td>ammo</td>
                            </tr>
                        @endforeach
                        @endif
                        <tr>
                            <td colspan="3">Total amount: </td>
                            <td>ammo</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="btn-group pull-right" role="group">
                        <button type="submit" class="btn btn-success">Checkout</button>
                    </div>
                </div> <!-- col-md-9 -->
            </div> <!-- row -->
        </div> <!-- container -->

    </section> <!-- Main content Section -->

@endsection

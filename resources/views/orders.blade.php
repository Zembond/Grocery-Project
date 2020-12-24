@extends('admin_nav')

@section('admin_content')
    <div class="container mt-5">
        <div class="justify-content-between">
            <h2>Orders</h2>

            <div class="row mt-4">
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>When sent</th>
                            <th>Total price</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->name }}</td>
                                <td>{{ $order->phone_number }}</td>
                                <td>{{ $order->created_at->format('H:i d/m/Y') }}</td>
                                <td>{{ $order->getFullPrice() }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

@endsection

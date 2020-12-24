@extends('wrap')

@section('main_content')

    <section class="mt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="form-group">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" name="email">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Password</label>
                                <input type="password" class="form-control" id="inputPassword4" name="password">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div> <!-- col-md-6 -->
            </div> <!-- row -->
        </div> <!-- container -->
    </section> <!-- Registration section -->

@endsection

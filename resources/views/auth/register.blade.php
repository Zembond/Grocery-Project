@extends('wrap')

@section('main_content')

    <section class="mt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <form action="{{route('register')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="form-group">
                                <label for="inputEmail4">Name</label>
                                <input type="text" class="form-control" id="inputEmail4" name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" name="email">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Password</label>
                                <input type="password" class="form-control" id="inputPassword4" name="password">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Repeat Password</label>
                                <input type="password" class="form-control" id="inputPassword4" name="password_confirmation">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div> <!-- col-md-6 -->
            </div> <!-- row -->
        </div> <!-- container -->
    </section> <!-- Registration section -->

@endsection


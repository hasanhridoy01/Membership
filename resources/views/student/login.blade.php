@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg mt-2">
                <div class="card-header">
                    <h2>Student login</h2>

                    @if( $errors -> any() )
                      <p class="alert alert-danger">{{ $errors -> first() }} <button class="close" data-dismiss="alert">&times;</button> </p>
                    @endif

                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="">Email/Username</label>
                            <input name="email" class="form-control" type="text" placeholder="Email/UserName">
                        </div>

                        <div class="form-group">
                            <label for="">Password</label>
                            <input name="password" class="form-control" type="password" placeholder="Password">
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Log In" class="btn btn-sm btn-primary">
                        </div>

                    </form>
                </div>
                <div class="card-footer">
                    <a class="card-link" href="{{ route('student.register') }}">Student Register</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
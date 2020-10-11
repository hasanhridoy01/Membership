@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg mt-3 mb-4">
                <div class="card-header"><h2>Create an Account</h2></div>
                <div class="card-body">
                    <form action="{{ url('admin-register') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="">Name</label>
                            <input name="name" class="form-control" type="text" placeholder="Name">
                        </div>

                        <div class="form-group">
                            <label for="">Username</label>
                            <input name="uname" class="form-control" type="text" placeholder="Username">
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input name="email" class="form-control" type="text" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <label for="">Cell</label>
                            <input name="cell" class="form-control" type="text" placeholder="Cell">
                        </div>

                        <div class="form-group">
                            <label for="">Password</label>
                            <input name="password" class="form-control" type="password" placeholder="Password">
                        </div>

                        <div class="form-group">
                            <label for="">Photo</label>
                            <input name="photo" class="form-control" type="file">
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Add User" class="btn btn-sm btn-primary">
                        </div>

                    </form>
                </div>
                <div class="card-footer">
                    <a class="card-link" href="{{ url('admin') }}">Login Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

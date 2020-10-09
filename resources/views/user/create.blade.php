@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Add New Users</h2>
            <a href="{{ route('user.index') }}" class="btn btn-sm btn-primary">All Users</a>
            <hr>
            <form action="{{ route('user.store') }}" method="POST"> 
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
                    <label for="">Role</label>
                    <select class="form-control" name="role" id="">
                        @foreach( $all_role as $roles )
                        <option value="{{ $roles -> id }}">{{ $roles -> name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <input type="submit" value="Add User" class="btn btn-sm btn-primary">
                </div>

            </form>
        </div>
    </div>
</div>
@endsection

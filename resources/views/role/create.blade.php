@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Add New Role</h2>
            <a href="{{ route('role.index') }}" class="btn btn-sm btn-primary">All Roles</a>
            <hr>
            <form action="{{ route('role.store') }}" method="POST"> 
                @csrf

                <div class="form-group">
                    <label for="">Role Name</label>
                    <input name="name" class="form-control" type="text" placeholder="Role Name">
                </div>

                <div class="form-group">
                    <label for="">Permission</label>
                    <br>
                    <input name="per[]" type="checkbox" value="Users" id="Users"><label for="Users">Users</label>
                    <input name="per[]" type="checkbox" value="Role" id="Role"><label for="Role">Role</label>
                    <input name="per[]" type="checkbox" value="Sesstings" id="Sesstings"><label for="Sesstings">Sesstings</label>
                    <input name="per[]" type="checkbox" value="SEO" id="SEO"><label for="SEO">SEO</label>
                </div>

                <div class="form-group">
                    <input type="submit" value="Add Role" class="btn btn-sm btn-primary">
                </div>

            </form>
        </div>
    </div>
</div>
@endsection

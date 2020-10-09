@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>All Roles</h2>
            <a href="{{ route('role.create') }}" class="btn btn-sm btn-primary mb-1">Add New Role</a>
            <table class="table table-striped"> 
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Role Name</th>
                        <th>Permission</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $all_roles as $roles )
                    <tr>
                        <td>{{ $loop -> index + 1 }}</td>
                        <td>{{ $roles -> name }}</td>
                        <td>
                            @foreach( json_decode($roles -> permission) as $per )
                            {{ $per }} | 
                            @endforeach
                        </td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning">Edit</a>
                            <a href="" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

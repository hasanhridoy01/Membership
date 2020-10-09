@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} <a class="btn btn-sm btn-primary float-right" href="{{ url('dashboard') }}">Dashboard</a></div>

                <div class="card-body">
                   <h2>All registered Users</h2>
                   <table class="table table-striped">
                       <thead>
                           <tr>
                               <th>#</th>
                               <th>Name</th>
                               <th>Username</th>
                               <th>Email</th>
                               <th>Cell</th>
                               <th>Photo</th>
                               <th>Action</th>
                           </tr>
                       </thead>
                       <tbody>
                        @foreach( $all_users as $users )
                           <tr>
                               <td>{{ $loop -> index + 1 }}</td>
                               <td>{{ $users -> name }}</td>
                               <td>{{ $users -> uname }}</td>
                               <td>{{ $users -> email }}</td>
                               <td>{{ $users -> cell }}</td>
                               <td>
                                   <img src="media/users/{{ $users -> photo }}" alt="" style="height: 60px; width: 60px; padding: 5px; border: 2px solid gray;">
                               </td>
                               <td>
                                   <a href="" class="btn btn-sm btn-info">View</a>
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
        <div class="pagination">
          {{ $all_users -> links() }}
        </div>
    </div>
</div>
@endsection

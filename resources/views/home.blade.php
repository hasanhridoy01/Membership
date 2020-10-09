@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} <a class="btn btn-sm btn-primary float-right" href="{{ url('users') }}">All Users</a> </div>

                <div class="card-body">
                    <img style="height: 220px; width: 220px;" src="media/users/{{ Auth::user() -> photo }}" alt="">
                    <h2 style="font-family: cursive;" class="mt-1">{{ Auth::user() -> name }}</h2>
                    <table class="table table-striped mt-1">
                        <tr>
                            <td>Name</td>
                            <td>{{ Auth::user() -> name }}</td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td>{{ Auth::user() -> uname }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ Auth::user() -> email }}</td>
                        </tr>
                        <tr>
                            <td>Cell</td>
                            <td>{{ Auth::user() -> cell }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

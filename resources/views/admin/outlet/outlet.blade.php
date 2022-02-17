@extends('admin.components.master')
@section('title')
{{ $outlet->name }}
@endsection
@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-header" style="background-color: #EEEEEE">
            <h1 class="mb-0 text-dark">{{ $outlet->name }}</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <p>{{ $outlet->phone }}</p>
                    <p>{{ $outlet->address }}</p>
                </div>
                <div class="col">
                    <!--  -->
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" style="background-color: #EEEEEE">
            <h2 class="mb-0 text-header">User</h2>
        </div>
        <div class="card-body">
            <table class="table table-hover my-0 table-responsive">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Role</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $users as $user )
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->role }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

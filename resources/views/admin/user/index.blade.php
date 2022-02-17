@extends('admin.components.master')
@section('title', 'Users')
@section('content')

<div class="container-fluid p-0">
    <div class="col-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header" style="background-color: #EEEEEE">
                <div class="row">
                    <div class="col-lg-10">
                        <h2 class="mb-0">Users</h2>
                    </div>
                </div>
            </div>
            <table class="table table-hover my-0 table-responsive">
                <thead>
                    <tr>
                        <th>#</th>
                        <th class="d-none d-xl-table-cell">Name</th>
                        <th class="d-none d-md-table-cell">Role</th>
                        <th class="d-none d-xl-table-cell">Outlet</th>
                        <th class="d-none d-md-table-cell">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $users as $user )
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->role }}</td>
                        @if ( $user->outlet_id )
                        <td>{{ $user->outlet->name }}</td>
                        @else
                        <td>{{ $user->outlet_id }}</td>
                        @endif
                        <td>
                            <a type="button" href="{{ route('edituser', $user->id) }}" class="text-warning"
                                title="Edit">
                                <i class="align-middle me-2" data-feather="edit"></i>
                            </a>
                            <a type="button" href="{{ route('deleteuser', $user->id) }}" class="text-danger"
                                title="Delete">
                                <i class="align-middle me-2" data-feather="trash-2"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@extends('admin.components.master')
@section('title', 'Edit User')
@section('content')

<div class="container-fluid p-0">
    <form method="post" action="{{ route('storeuser') }}">
        @csrf
        <div class="col-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header" style="background-color: #EEEEEE">
                    <div class="row">
                        <div class="col-lg-10">
                            <h2 class="mb-0">Edit User</h2>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <input type="text" id="id" name="id" style="display: none" value="{{ $user->id }}">
                        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">

                        <input type="text" class="form-control d-none" id="email" name="email"
                            value="{{ $user->email }}">

                        <input type="text" class="form-control d-none" id="password" name="password"
                            value="{{ $user->name }}">
                        <br>
                        <div class="form-control" style="border: none">
                            <label for="role" class="col-1">Role</label>
                            <label class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="role1" name="role" value="Owner"
                                    {{$user->role == 'Owner' ? 'checked' : '' }}>
                                <span class="form-check-label">
                                    Owner
                                </span>
                            </label>
                            <label class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="role2" name="role" value="Admin"
                                    {{$user->role == 'Admin' ? 'checked' : '' }}>
                                <span class="form-check-label">
                                    Admin
                                </span>
                            </label>
                            <label class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="role2" name="role" value="Cashier"
                                    {{$user->role == 'Cashier' ? 'checked' : '' }}>
                                <span class="form-check-label">
                                    Cashier
                                </span>
                            </label>
                        </div>
                        <br>

                        <select class="form-select" name="outlet_id">
                            <option selected>Select Outlet</option>
                            @foreach ( $outlets as $outlet )
                            <option value="{{ $outlet->id }}" {{ $user->outlet_id == $outlet->id ?
                                'selected' : '' }}>{{ $outlet->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="col-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header" style="background-color: #EEEEEE">
                <h2 class="mb-0">Users</h2>
            </div>
            <div class="card-body">
                <table class="table table-hover my-0 table-responsive">
                    <thead>
                        <tr>
                            <th class="d-none d-xl-table-cell">Name</th>
                            <th class="d-none d-xl-table-cell">Role</th>
                            <th class="d-none d-md-table-cell">Outlet</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $users as $user )
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->role }}</td>
                            @if ( $user->outlet_id )
                            <td>{{ $user->outlet->name }}</td>
                            @else
                            <td>{{ $user->outlet_id }}</td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

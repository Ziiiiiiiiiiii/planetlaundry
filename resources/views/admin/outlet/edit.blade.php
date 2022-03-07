@extends('admin.components.master')
@section('title', 'Outlets')
@section('content')

<div class="container-fluid p-0">
    <form method="post" action="{{ route('updateoutlet') }}">
        @csrf
        <div class="col-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header" style="background-color: #EEEEEE">
                    <div class="row">
                        <div class="col-lg-10">
                            <h2 class="mb-0">Edit Outlet</h2>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary">Edit Outlet</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <input type="number" id="id" name="id" style="display: none" value="{{ $outlet->id }}">
                        <input type="text" class="form-control" id="name" name="name" value="{{ $outlet->name }}">
                        <br>
                        <textarea class="form-control" rows="2" id="address"
                            name="address">{{ $outlet->address }}</textarea>
                        <br>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ $outlet->phone }}">
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="col-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header" style="background-color: #EEEEEE">
                <h2 class="mb-0">Outlets</h2>
            </div>
            <div class="card-body">
                <table class="table table-hover my-0 table-responsive">
                    <thead>
                        <tr>
                            <th class="d-none d-xl-table-cell">Name</th>
                            <th class="d-none d-xl-table-cell">Address</th>
                            <th class="d-none d-md-table-cell">Phone</th>
                            <th class="d-none d-md-table-cell">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $outlets as $outlet )
                        <tr>
                            <td>
                                <a href="/outlets/{{ $outlet->id }}" class="text-dark">
                                    {{ $outlet->name }}
                                </a>
                            </td>
                            <td>{{ $outlet->address }}</td>
                            <td>{{ $outlet->phone }}</td>
                            <td>
                                <a type="button" href="outlets/edit" class="text-warning" title="Edit">
                                    <i class="align-middle me-2" data-feather="edit"></i>
                                </a>
                                <a type="button" href="outlets/delete/{{ $outlet->id }}" class="text-danger"
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
</div>

@endsection

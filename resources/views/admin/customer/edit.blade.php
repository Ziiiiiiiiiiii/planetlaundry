@extends('admin.components.master')
@section('title', 'Edit Customer')
@section('content')

<div class="container-fluid p-0">
    <form method="post" action="{{ route('storecustomer') }}">
        @csrf
        <div class="col-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header" style="background-color: #EEEEEE">
                    <div class="row">
                        <div class="col-lg-10">
                            <h2 class="mb-0">Edit Customer</h2>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary">Edit Customer</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <input type="number" id="id" name="id" style="display: none" value="{{ $customer->id }}">
                        <input type="text" class="form-control" id="name" name="name" value="{{ $customer->name }}">
                        <br>
                        <div>
                            <label for="sex" class="col-1">Sex</label>
                            <label class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="sex1" name="sex" value="Male" {{
                                    $customer->sex == 'Male' ? 'checked' : '' }}>
                                <span class="form-check-label">
                                    Male
                                </span>
                            </label>
                            <label class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="sex2" name="sex" value="Female" {{
                                    $customer->sex == 'Female' ? 'checked' : '' }}>
                                <span class="form-check-label">
                                    Female
                                </span>
                            </label>
                        </div>
                        <br>
                        <textarea class="form-control" rows="2" id="address"
                            name="address">{{ $customer->address }}</textarea>
                        <br>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ $customer->phone }}">
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="col-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header" style="background-color: #EEEEEE">
                <h2 class="mb-0">Customers</h2>
            </div>
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
                    @foreach ( $customers as $customer )
                    <tr>
                        <td>
                            <a href="/customers/{{ $customer->name }}" class="text-dark"
                                title="{{ $customer->name }}'s Transactions">
                                {{ $customer->name }}
                            </a>
                        </td>
                        <td>{{ $customer->address }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td>
                            <a type="button" href="customers/edit/{{ $customer->id }}" class="text-warning"
                                title="Edit">
                                <i class="align-middle me-2" data-feather="edit"></i>
                            </a>
                            <a type="button" href="customers/delete/{{ $customer->id }}" class="text-danger"
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

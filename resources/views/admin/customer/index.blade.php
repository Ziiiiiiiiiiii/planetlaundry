@extends('admin.components.master')
@section('title', 'Customer')
@section('content')

<div class="container-fluid p-0">
    <form method="post" action="{{ route('storecustomer') }}">
        @csrf
        <div class="col-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header" style="background-color: #EEEEEE">
                    <div class="row">
                        <div class="col-lg-10">
                            <h2 class="mb-0">Add Customer</h2>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary">Add Customer</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <input type="text" class="form-control" placeholder="Name" id="name" name="name">
                        <br>
                        <div>
                            <label for="sex" class="col-1">Sex</label>
                            <label class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="sex1" name="sex" value="Male">
                                <span class="form-check-label">
                                    Male
                                </span>
                            </label>
                            <label class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="sex2" name="sex" value="Female">
                                <span class="form-check-label">
                                    Female
                                </span>
                            </label>
                        </div>
                        <br>
                        <textarea class="form-control" rows="2" id="address" name="address"
                            placeholder="Address"></textarea>
                        <br>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
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
                        <th class="d-none d-xl-table-cell">Sex</th>
                        <th class="d-none d-xl-table-cell">Address</th>
                        <th class="d-none d-md-table-cell">Phone</th>
                        <th class="d-none d-md-table-cell">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $customers as $customer )
                    <tr>
                        <td>
                            <a href="/customers/{{ $customer->id }}" class="text-dark"
                                title="{{ $customer->name }}'s Transactions">
                                {{ $customer->name }}
                            </a>
                        </td>
                        <td>{{ $customer->sex }}</td>
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

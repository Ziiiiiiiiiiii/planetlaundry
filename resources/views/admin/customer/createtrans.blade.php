@extends('admin.components.master')
@section('title', 'Add Transaction')
@section('content')

<div class="container-fluid p-0">
    <form method="post" action="{{ route('storetrans') }}">
        @csrf
        <div class="col-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header" style="background-color: #EEEEEE">
                    <div class="row">
                        <div class="col-lg-10">
                            <h2 class="mb-0">Add Transaction</h2>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary">Add Transaction</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <label>Quantity</label>
                                <input type="text" class="form-control" id="quantity" name="quantity">
                                <br>
                                <label>Due Date</label>
                                <input type="date" class="form-control" id="deadline" name="deadline">
                                <br>
                                <label>Pay Date</label>
                                <input type="date" class="form-control" id="paydate" name="paydate">
                                <br>
                                <label>Additional Cost</label>
                                <input type="number" class="form-control" id="additional_cost" name="additional_cost">
                                <br>
                                <label>Discount</label>
                                <input type="number" class="form-control" id="discount" name="discount">
                                <br>
                                <label>Tax</label>
                                <input type="number" class="form-control" id="tax" name="tax">
                                <br>
                                <label>Total Price</label>
                                <input type="number" class="form-control" id="total_price" name="total_price">
                                <br>
                            </div>

                            <div class="col">
                                <label>Outlet</label>
                                <select class="form-select" name="outlet_id">
                                    <option selected>Select Outlet</option>
                                    @foreach ( $outlets as $outlet )
                                    <option value="{{ $outlet->id }}">{{ $outlet->name }}</option>
                                    @endforeach
                                </select>
                                <br>
                                <label>Outlet</label>
                                <select class="form-select" name="user_id">
                                    <option selected>Select User</option>
                                    @foreach ( $users as $user )
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                                <br>
                                <label>Customer</label>
                                <select class="form-select" name="customer_id">
                                    <option selected>Select Customer</option>
                                    @foreach ( $customers as $customer )
                                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                    @endforeach
                                </select>
                                <br>
                                <label>Package</label>
                                <select class="form-select" name="package_id">
                                    <option selected>Select Package</option>
                                    @foreach ( $packages as $package )
                                    <option value="{{ $package->id }}">{{ $package->package_name }}</option>
                                    @endforeach
                                </select>
                                <br>
                                <label for="status">Status</label>
                                <div class="form-control" style="border: none">
                                    <label class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="status1" name="status"
                                            value="New">
                                        <span class="form-check-label">
                                            New
                                        </span>
                                    </label>
                                    <label class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="status2" name="status"
                                            value="Process">
                                        <span class="form-check-label">
                                            Process
                                        </span>
                                    </label>
                                    <label class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="status3" name="status"
                                            value="Done">
                                        <span class="form-check-label">
                                            Done
                                        </span>
                                    </label>
                                    <label class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="status4" name="status"
                                            value="Accepted">
                                        <span class="form-check-label">
                                            Accepted
                                        </span>
                                    </label>
                                </div>
                                <br>
                                <label for="status">Paid Status</label>
                                <div class="form-control" style="border: none">
                                    <label class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="paidstatus1" name="paid_status"
                                            value="Paid">
                                        <span class="form-check-label">
                                            Paid
                                        </span>
                                    </label>
                                    <label class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="paidstatus2" name="paid_status"
                                            value="Not Paid">
                                        <span class="form-check-label">
                                            Not Paid
                                        </span>
                                    </label>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection

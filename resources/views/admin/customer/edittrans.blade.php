@extends('admin.components.master')
@section('title', 'Edit Transaction')
@section('content')

<div class="container-fluid p-0">
    <form method="post" action="{{ route('storetrans') }}">
        @csrf
        <div class="col-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header" style="background-color: #EEEEEE">
                    <div class="row">
                        <div class="col-lg-10">
                            <h2 class="mb-0">Edit Transaction</h2>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <input id="id" name="id" value="{{ $transaction->id }}" style="display: none">
                                <input id="invoice" name="invoice" value="{{ $transaction->invoice }}"
                                    style="display: none">
                                <label>Quantity</label>
                                <input type="text" class="form-control" id="quantity" name="quantity"
                                    value="{{ $transaction->quantity }}">
                                <br>
                                <label>Due Date</label>
                                <input type="text" class="form-control" id="deadline" name="deadline"
                                    value="{{ $transaction->deadline }}">
                                <br>
                                @if ( $transaction->paydate )
                                <label>Pay Date</label>
                                <input type="text" class="form-control" id="paydate" name="paydate"
                                    value="{{ $transaction->paydate }}">
                                @else
                                <label>Pay Date</label>
                                <input type="date" class="form-control" id="paydate" name="paydate">
                                @endif
                                <br>
                                <label>Additional Cost</label>
                                <input type="number" class="form-control" id="additional_cost" name="additional_cost"
                                    value="{{ $transaction->additional_cost }}">
                                <br>
                                <label>Discount</label>
                                <input type="number" class="form-control" id="discount" name="discount"
                                    value="{{ $transaction->discount }}">
                                <br>
                                <label>Tax</label>
                                <input type="number" class="form-control" id="tax" name="tax"
                                    value="{{ $transaction->tax }}">
                                <br>
                                <label>Total Price</label>
                                <input type="number" class="form-control" id="total_price" name="total_price"
                                    value="{{ $transaction->total_price }}">
                                <br>
                            </div>

                            <div class="col">
                                <label>Outlet</label>
                                <select class="form-select" name="outlet_id">
                                    <option selected>Select Outlet</option>
                                    @foreach ( $outlets as $outlet )
                                    <option value="{{ $outlet->id }}" {{ $transaction->outlet_id == $outlet->id ?
                                        'selected' : '' }}>{{ $outlet->name }}</option>
                                    @endforeach
                                </select>
                                <br>
                                <label>Outlet</label>
                                <select class="form-select" name="user_id">
                                    <option selected>Select User</option>
                                    @foreach ( $users as $user )
                                    <option value="{{ $user->id }}" {{ $transaction->user_id == $user->id ?
                                        'selected' : '' }}>{{ $user->name }}</option>
                                    @endforeach
                                </select>
                                <br>
                                <label>Customer</label>
                                <select class="form-select" name="customer_id">
                                    <option selected>Select Customer</option>
                                    @foreach ( $customers as $customer )
                                    <option value="{{ $customer->id }}" {{ $transaction->customer_id == $customer->id ?
                                        'selected' : '' }}>{{ $customer->name }}</option>
                                    @endforeach
                                </select>
                                <br>
                                <label>Package</label>
                                <select class="form-select" name="package_id">
                                    <option selected>Select Package</option>
                                    @foreach ( $packages as $package )
                                    <option value="{{ $package->id }}" {{ $transaction->package_id == $package->id ?
                                        'selected' : '' }}>{{ $package->package_name }}</option>
                                    @endforeach
                                </select>
                                <br>
                                <label for="status">Status</label>
                                <div class="form-control" style="border: none">
                                    <label class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="status1" name="status"
                                            value="New" {{$transaction->status == 'New' ? 'checked' : '' }}>
                                        <span class="form-check-label">
                                            New
                                        </span>
                                    </label>
                                    <label class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="status2" name="status"
                                            value="Process" {{$transaction->status == 'Process' ? 'checked' : '' }}>
                                        <span class="form-check-label">
                                            Process
                                        </span>
                                    </label>
                                    <label class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="status3" name="status"
                                            value="Done" {{$transaction->status == 'Done' ? 'checked' : '' }}>
                                        <span class="form-check-label">
                                            Done
                                        </span>
                                    </label>
                                    <label class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="status4" name="status"
                                            value="Accepted" {{$transaction->status == 'Accepted' ? 'checked' : '' }}>
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
                                            value="Paid" {{ $transaction->paid_status == 'Paid' ? 'checked' : '' }}>
                                        <span class="form-check-label">
                                            Paid
                                        </span>
                                    </label>
                                    <label class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="paidstatus2" name="paid_status"
                                            value="Not Paid" {{ $transaction->paid_status == 'Not paid' ? 'checked' : ''
                                        }}>
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

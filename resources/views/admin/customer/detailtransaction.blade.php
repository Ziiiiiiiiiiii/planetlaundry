@extends('admin.components.master')
@section('title')
{{ $customer->name }} - Transaction
@endsection
@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-header" style="background-color: #EEEEEE">
            <h1 class="mb-0 text-dark">Transaction</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <ul>
                        <li>Date</li>
                        <li>Invoice</li>
                        <li>Outlet</li>
                        <li>Package</li>
                        <li>Quantity</li>
                        <li>Due Date</li>
                        <li>Payment Date</li>
                        <li>Additional Cost</li>
                        <li>Discount</li>
                        <li>Tax</li>
                        <li>Total Price</li>
                        <li>Status</li>
                        <li>Paid Status</li>
                        <li>User</li>
                    </ul>
                </div>
                <div class="col">
                    <form method="post" action="">
                        <ul>
                            <li>Date</li>
                            <li>Invoice</li>
                            <li>Outlet</li>
                            <li>Package</li>
                            <li>Quantity</li>
                            <li>Due Date</li>
                            <li>Payment Date</li>
                            <li>Additional Cost</li>
                            <li>Discount</li>
                            <li>Tax</li>
                            <li>Total Price</li>
                            <li>Status</li>
                            <li>Paid Status</li>
                            <li>User</li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

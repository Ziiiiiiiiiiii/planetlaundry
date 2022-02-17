@extends('admin.components.master')
@section('title')
{{ $customer->name }}
@endsection
@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-header" style="background-color: #EEEEEE">
            <h1 class="mb-0 text-dark">{{ $customer->name }}</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <p>{{ $customer->sex }}</p>
                    <p>{{ $customer->phone }}</p>
                    <p>{{ $customer->address }}</p>
                    <br>
                    <br>
                    <p>New : {{ $new }}</p>
                </div>
                <div class="col">
                    <p>ㅤ</p>
                    <p>ㅤ</p>
                    <p>ㅤ</p>
                    <br>
                    <br>
                    <p>Process : {{ $process }}</p>
                </div>
                <div class="col">
                    <p>Transaction : {{ $transaction }}</p>
                    <p>Paid : {{ $paid }}</p>
                    <p>Not Paid : {{ $notpaid }}</p>
                    <br>
                    <br>
                    <p>Done : {{ $done }}</p>
                </div>
                <div class="col">
                    <p>ㅤ</p>
                    <p>ㅤ</p>
                    <p>ㅤ</p>
                    <br>
                    <br>
                    <p>Accepted : {{ $accepted }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" style="background-color: #EEEEEE">
            <div class="row">
                <div class="col-lg-10">
                    <h2 class="mb-0">Transaction</h2>
                </div>
                <div class="col">
                    <a type="button" class="btn btn-primary" href="{{ route('addtransactions') }}">Add Transaction</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-hover my-0 table-responsive">
                <thead>
                    <tr>
                        <th>Invoice</th>
                        <th>Outlet</th>
                        <th>Package</th>
                        <th>Due Date</th>
                        <th>Status</th>
                        <th>Paid Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $transactions as $transaction )
                    <tr>
                        <td>
                            <a type="button" href="/transaction/edit/{{ $transaction->id }}" title="Detail"
                                class="text-dark">
                                {{ $transaction->invoice }}
                            </a>
                        </td>
                        <td>{{ $transaction->outlet->name }}</td>
                        <td>{{ $transaction->package->package_name}}</td>
                        <td>{{ $transaction->deadline }}</td>
                        <td>{{ $transaction->status }}</td>
                        <td>{{ $transaction->paid_status }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

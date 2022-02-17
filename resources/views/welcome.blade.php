@extends('admin.components.master')
@section('title', 'Welcome')
@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-header" style="background-color: #EEEEEE">
            <h1><b>Welcome To </b><b style="color: #9ac0ec">Planet </b><b style="color: #041562">Laundry</b></h1>
        </div>
        <div class="card-body">
            <div class="row">
                <img src="{{ asset('sources/img/icons/planet_clothes-removebg-preview.png') }}" class="col-5">
                <div class="col-7">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@extends('admin.components.master')
@section('title', 'Edit Packages')
@section('content')

<div class="container-fluid p-0">
    <form method="post" action="{{ route('storepackage') }}">
        @csrf
        <div class="col-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header" style="background-color: #EEEEEE">
                    <div class="row">
                        <div class="col-lg-10">
                            <h2 class="mb-0">Edit Package</h2>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary">Edit Package</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <input type="number" id="id" name="id" style="display: none" value="{{ $package->id }}">
                        <input type="text" class="form-control" value="{{ $package->package_name }}" id="package_name"
                            name="package_name">
                        <br>
                        <select class="form-select mb-3" name="package_category_id">
                            <option selected>-- Select Category --</option>
                            @foreach ( $pcategories as $category )
                            <option value="{{ $category->id }}" {{ $package->package_category_id == $category->id ?
                                'selected' : '' }}>{{ $category->category }}</option>
                            @endforeach
                        </select>
                        <textarea class="form-control" rows="2" id="description"
                            name="description">{{ $package->description }}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="col-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header" style="background-color: #EEEEEE">
                <h2 class="mb-0">Packages</h2>
            </div>
            <div class="card-body">
                <table class="table table-hover my-0 table-responsive">
                    <thead>
                        <tr>
                            <th class="d-none d-xl-table-cell">Package Name</th>
                            <th class="d-none d-xl-table-cell">Category</th>
                            <th class="d-none d-md-table-cell">Description</th>
                            <th class="d-none d-md-table-cell">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $packages as $package )
                        <tr>
                            <td>{{ $package->package_name }}</td>
                            <td>{{ $package->packagecategory->category }}</td>
                            <td>{{ $package->description }}</td>
                            <td>
                                <a type="button" href="packages/edit/{{ $package->id }}" class="text-warning"
                                    title="Edit">
                                    <i class="align-middle me-2" data-feather="edit"></i>
                                </a>
                                <a type="button" href="packages/delete/{{ $package->id }}" class="text-danger"
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

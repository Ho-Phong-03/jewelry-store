@extends('admin.master')
@section('title', 'Customer')
@section('content')
@if (session('success'))
<div id="success-message" class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
    <div>
        <a href="{{route('customer.create')}}" class="btn btn-info">+ Add Customer</a>
    </div>
    <div class="ms-md-auto py-2 py-md-0">
        <nav
            class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
            <div class="input-group">
                <div class="input-group-prepend">
                    <button type="submit" class="btn btn-search pe-1">
                        <i class="fa fa-search search-icon"></i>
                    </button>
                </div>
                <form method="GET" action="{{ route('customer.index') }}" class="d-flex">
                    <input
                        type="text"
                        name="search"
                        placeholder="Search ..."
                        class="form-control"
                        value="{{ old('search', $search ?? '') }}" />
                    <button type="submit" class="btn btn-search pe-1">
                        <i class="fa fa-search search-icon"></i>
                    </button>
                </form>
            </div>
        </nav>
    </div>
</div>
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Role</th>
                        <th scope="col"></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $model)
                    <tr>
                        <td>{{$model->id}}</td>
                        <td>
                            <img src="upload/admin/{{$model->images}}" alt="" width="45"></i>
                        </td>
                        <td>{{$model->name}}</td>
                        <td>{{$model->email}}</td>
                        <td>{{$model->phone}}</td>
                        <td>{{$model->address}}</td>
                        <td>{{$model->role}}</td>
                        <td>
                            <form action="{{route('customer.destroy', $model->id)}}" method="post">
                                @csrf @method('DELETE')
                                <a class="btn btn-sm btn-info" href="{{route('customer.edit', $model->id)}}" role="button">
                                    <i class="fa fa-edit"></i>
                                    Edit
                                </a>
                                <button class="btn btn-sm btn-danger" href="#" role="button" onclick="return confirm('Bạn có chắc không ?')">
                                    <i class="fa fa-trash"></i>
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
{{$data->links()}}
@endsection
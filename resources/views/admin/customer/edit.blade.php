@extends('admin.master')
@section('title', 'Edit Customer')
@section('content')
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <a href="{{route('customer.index')}}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i>
    </a>
    
    <form action="{{route('customer.update', $data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
    
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{old('name', $data->name)}}">
            @error('name')
                <small id="helpId" class="text-muted">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email" placeholder="Enter Email" value="{{ old('email', $data->email) }}">
            @error('email')
                <small id="helpId" class="text-muted">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Phone</label>
            <input type="text" class="form-control" name="phone" placeholder="Enter Phone" value="{{ old('phone', $data->phone) }}">
            @error('phone')
                <small id="helpId" class="text-muted">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Address</label>
            <input type="text" class="form-control" name="address" placeholder="Enter Address" value="{{old('address', $data->address)}}">
            @error('address')
                <small id="helpId" class="text-muted">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Images</label>
            <input type="file" class="form-control" name="image" value="{{old('image', $data->images)}}">
            <br>
            <img src="upload/admin/{{$data->images}}" alt="" width="100">
            @error('image')
                <small id="helpId" class="text-muted">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="role">Role</label>
            <select name="role" id="role" class="form-control" required>
                <option value="" disabled selected>Select Role</option>
                @foreach ($roles as $role)
                    <option value="{{ $role }}" {{ old('role', $data->role) == $role ? 'selected' : '' }}>
                        {{ ucfirst($role) }}
                    </option>
                @endforeach
            </select>
            @error('role')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary" >Update</button>
    </form>
    
    
@endsection
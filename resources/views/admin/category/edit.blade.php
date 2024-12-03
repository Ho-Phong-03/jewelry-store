@extends('admin.master')
@section('title', 'Edit Category')
@section('content')
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <a href="{{route('category.index')}}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i>
    </a>
    
    <form action="{{route('category.update', $data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
    
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{old('name', $data->name)}}">
            @error('name')
                <small id="helpId" class="text-muted">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Status</label>
            
            <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="status" value="1" @checked($data->status == 1)>
                Hiển thị
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="status" value="0" @checked($data->status == 0)>
                Đang ẩn
            </label>
        </div>
            
        </div>
        <button type="submit" class="btn btn-primary" >Update</button>
    </form>
    
    
@endsection
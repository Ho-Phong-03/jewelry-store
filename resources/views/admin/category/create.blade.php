@extends('admin.master')
@section('title', 'Create Category')
@section('content')
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <a href="{{route('category.index')}}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i>
    </a>
    
    <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
    
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{old('name')}}">
            @error('name')
                <small id="helpId" class="text-muted">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Status</label>
            
            <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="status" value="1" checked>
                Hiển thị
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="status" value="0">
                Đang ẩn
            </label>
        </div>
            
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
    
    
@endsection
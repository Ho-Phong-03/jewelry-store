@extends('admin.master')
@section('title', 'Create Product')
@section('content')
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <a href="{{route('product.index')}}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i>
    </a>
    
    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
    
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{old('name')}}">
            @error('name')
                <small id="helpId" class="text-muted">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Price</label>
            <input type="text" class="form-control" name="price" placeholder="Enter Price" value="{{ old('price') }}">
            @error('price')
                <small id="helpId" class="text-muted">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Sale</label>
            <input type="text" class="form-control" name="sale" placeholder="Enter Sale" value="{{old('sale')}}">
            @error('sale')
                <small id="helpId" class="text-muted">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Images</label>
            <input type="file" class="form-control" name="image">
            @error('image')
                <small id="helpId" class="text-muted">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea id="input" name="description" class="form-control" rows="3"  placeholder="Enter Description" value="{{old('description')}}"></textarea>
            @error('description')
                <small id="helpId" class="text-muted">{{$message}}</small>
            @enderror
            
        </div>
        <div class="form-group">
            <label for="">Category</label>
            <select name="category_id" id="inputcategory_id" class="form-control" required="required">
                <option value="">Select category</option>
                @foreach ($category as $cate) 
                    <!-- <option value="{{$cate->id}}">{{$cate->name}}</option> -->
                    <option value="{{ $cate->id }}" {{ old('category_id') == $cate->id ? 'selected' : '' }}>
                    {{ $cate->name }}
                @endforeach
            </select>
            @error('category_id')
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
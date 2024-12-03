@extends('admin.master')
@section('title', 'Edit Product')
@section('content')
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <a href="{{route('product.index')}}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i>
    </a>
    
    <form action="{{route('product.update', $data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
    
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{old('name', $data->name)}}">
            @error('name')
                <small id="helpId" class="text-muted">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Price</label>
            <input type="text" class="form-control" name="price" placeholder="Enter Price" value="{{ old('price', $data->price) }}">
            @error('price')
                <small id="helpId" class="text-muted">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Sale</label>
            <input type="text" class="form-control" name="sale" placeholder="Enter Sale" value="{{old('sale', $data->sale)}}">
            @error('sale')
                <small id="helpId" class="text-muted">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Images</label>
            <input type="file" class="form-control" name="image" value="{{old('sale', $data->image)}}">
            <br>
            <img src="upload/{{$data->image}}" alt="" width="100">
            @error('image')
                <small id="helpId" class="text-muted">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea id="input" name="description" class="form-control" rows="3"  placeholder="Enter Description" value="{{old('description', $data->description)}}"></textarea>
            @error('description')
                <small id="helpId" class="text-muted">{{$message}}</small>
            @enderror
            
        </div>
        <div class="form-group">
            <label for="">Category</label>
            <select name="category_id" id="inputcategory_id" class="form-control" required="required">
                <option value="">Select category</option>
                @foreach ($category as $cate)
                    <option value="{{ $cate->id }}" {{ old('category_id', $data->category_id) == $cate->id ? 'selected' : '' }}>
                        {{ $cate->name }}
                    </option>
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
<!doctype html>
@extends('layouts.layout')
@section('content')
<body style="background-color: rgb(170, 197, 212)" >
    <div class="d-flex flex-column justify-content-center align-items-center">
      <div class="col-md-6" >
      <form method="POST" action={{ url('inventory/'.$inventory->id) }}>
        @method('PUT')
        @csrf
        <div class="mb-1">
          <label for="exampleInputCategory" class="form-label">Edit Item Category</label>
          <input type="text" class="form-control" name="category" value="{{ $inventory->catogory }}">
        </div>
        <div class="mb-1">
          <label for="exampleBrandname" class="form-label">Edit Brand Name</label>
          <input type="text" class="form-control" name="brandname" value="{{ $inventory->brandname }}">
        </div>
        <div class="mb-1">
          <label for="exampleName" class="form-label">Edit Device Name</label>
          <input type="text" class="form-control" name="devicename" value="{{ $inventory->name }}">
        </div>
        <div class="mb-1">
          <label for="exampleModel" class="form-label">Edit Model</label>
          <input type="text" class="form-control" name="model" value="{{ $inventory->model }}">
        </div>
        <div class="mb-1">
          <label for="exampleDescription" class="form-label">Edit Description</label>
          <input type="text" class="form-control" name="description" value="{{ $inventory->description }}">
        </div>
        <div class="mb-1">
          <label for="exampleQuantity" class="form-label">Edit Quantity</label>
          <input type="number" class="form-control" name="quantity" value="{{ $inventory->quantity }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>
    <div style="display:flex; margin-top:-3.2%; margin-left:43.8%">
      <form method="POST" action="{{url('inventory/'.$inventory->id) }}">
        @csrf
        @method('DELETE') 
        <button type="submit"  class="btn btn-danger">Delete</button>
      </form>  
    </div> 
  </div>
</body>
  @endsection
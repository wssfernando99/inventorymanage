@extends('layouts.layout')
@section('content')
<body style="background-color: rgb(170, 197, 212)" >
<div class="d-flex justify-content-center">
    <div class='flex flex-col border-2 border-sky-400 rounded-xl w-50 p-4'>
      <form method="POST" action={{ url('inventory/'.$inventory->id) }}>
        <div class="card text-center">
          <div class="card-header">
            {{ $inventory->name }}
          </div>
          <div class="card-body">
            <h5 class="card-title">Brand : {{ $inventory->brandname }}</h5>
            <p class="card-text">{{ $inventory->catogory }} Category</p>
            <p class="card-text">Model : {{ $inventory->model }}</p>
            <p class="card-text">Description : {{ $inventory->description }}</p>
            <p class="card-text">{{ $inventory->quantity }} Items left</p>
            <div class="min-width">
              <a class="btn btn-outline-primary" href={{ url('inventory/'.$inventory->id.'/edit') }}>Edit</a>
              <form method="POST" action="{{url('inventory/'.$inventory->id) }}">
                @csrf
                @method('DELETE') 
                <button type="submit"  class="btn btn-outline-danger">Delete</button>
              </form>
            </div>
          <div class="card-footer text-body-secondary">
            <a href={{ url('inventory/') }}>View All</a>
          </div>
        </div>
      </form>
    </div>
</div>
@if (Session::has('message'))
  <script>
    swal("Done","{{ Session::get('message') }}",'success',{
      button:false,
      button:"ok",
        })
  </script>   
  @endif 
</body>  
  
@endsection
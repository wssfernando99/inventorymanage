@extends('layouts.layout')
@section('content')
    <body style="background-color: rgb(170, 197, 212)" >
      <div style="margin-top: 5%">
      <table class=" table table-striped ">
        <thead >
          <tr>
            <th scope="col" style="background: transparent">No.</th>
            <th scope="col" style="background: transparent">Category</th>
            <th scope="col" style="background: transparent">Brand Name</th>
            <th scope="col" style="background: transparent">Device Name</th>
            <th scope="col" style="background: transparent">quantity</th>
            <th scope="col" style="background: transparent"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($inventories as $index => $inventory)
          <tr>
            <th scope="row" style="background: transparent">{{ $index + 1 }}</th>
            <td style="background: transparent">{{ $inventory->catogory }}</td>
            <td style="background: transparent">{{ $inventory->brandname }}</td>
            <td style="background: transparent">{{ $inventory->name }}</td>
            <td style="background: transparent">{{ $inventory->quantity}}</td>
            <th style="background: transparent">
              <div class="d-flex justify-content-around">
                <a class="btn btn-info" href={{ url('inventory/'.$inventory->id) }}>More</a>
                <a class="btn btn-primary" href={{ url('inventory/'.$inventory->id.'/edit') }}>Edit</a>
                <form method="POST" action="{{url('inventory/'.$inventory->id) }}">
                  @csrf
                  @method('DELETE') 
                  <button type="submit"  class="btn btn-danger">Delete</button>
                </form>
              </div>
                </th>
          </tr>
          @endforeach
        </tbody>
      </table>
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
    
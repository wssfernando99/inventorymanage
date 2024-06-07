@extends('layouts.layout')
@section('content')
<body style="background-color: rgb(170, 197, 212)" >
    <div class="d-flex justify-content-center">
    <div class="col-md-6" >
      <form method="POST" action={{ url('inventory') }}>
        @csrf
        <div class="mb-1">
          <label for="exampleInputCategory" class="form-label">Enter Item Category</label>
          <input type="text" class="form-control" name="category"/>
          <div class="text-danger">@error('category')
            *{{$message}}
          @enderror
      </div>
        </div>
        <div class="mb-1">
          <label for="exampleBrandname" class="form-label">Brand Name</label>
          <input type="text" class="form-control" name="brandname"/>
              <div class="text-danger">@error('brandname')
                    *{{$message}}
                  @enderror
              </div>
        </div>
        <div class="mb-1">
          <label for="exampleName" class="form-label">Device Name</label>
          <input type="text" class="form-control" name="devicename"/>
            <div class="text-danger">@error('devicename')
                  *{{$message}}
                 @enderror
            </div>
        </div>
        <div class="mb-1">
          <label for="exampleModel" class="form-label">Model</label>
          <input type="text" class="form-control" name="model"/>
           <div class="text-danger">@error('model')
                    *{{$message}}
                  @enderror
           </div>
        </div>
        <div class="mb-1">
          <label for="exampleDescription" class="form-label">Description</label>
          <input type="text" class="form-control" name="description"/>
          <div class="text-danger">@error('description')
                    *{{$message}}
                  @enderror</div> 
        </div>
        <div class="mb-1">
          <label for="exampleQuantity" class="form-label">Quantity</label>
          <input type="Number" class="form-control" name="quantity"/>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    </div>
</body>
@endsection
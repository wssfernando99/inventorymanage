@extends('layouts.layout')
@section('content')
<body style="background-image: url(images/bg.png); width: 100%; height: 100vh; background-repeat: no-repeat; background-size: cover;">
<div style="margin-top: 7% ;display:flex;flex-direction:column;justify-content:center;align-items:center" >
    <div><h1>Welcome To Inventory Management System</h1></div>
    <div style="margin-top: 6%"><p>You can simply view all Inventories by clicking by 'view inventories' button in navigation bar.</div>
</div>
<div style="margin-top:2%;display:flex;flex-direction:row;justify-content:space-around;align-items:center">
    <div>
        <a style="text-decoration: none" class="text-muted" href={{ url('inventory/create') }}>
        <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Add new inventory</h5>
                    <p class="card-text">you can add your new inventory here.</p>
                  </div>
                </div>
        </a>
    </div>
    <div>
        <a style="text-decoration: none" class="text-muted" href={{ url('inventory') }}>
            <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">View All Inventories</h5>
                        <p class="card-text">you can view your all inventories here.</p>
                      </div>
                    </div>
            </a>
    </div>
</div>
</body>
@endsection
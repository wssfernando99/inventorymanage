<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inventory Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </head>
  <body >
    <nav class="navbar navbar-light bg-light" style="height: 5rem" >
        <div class="container-fluid" >
            <div style="width: 20rem; height: 2rem">
                <h4>Inventory Management</h4>
            </div>
          <div class="d-flex justify-content-evenly" style="width: 30rem; height: 2rem">
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group me-2" role="group" aria-label="First group">
                  <a class="btn btn-outline-dark" href= '/'>Home</a>
                </div>
                <div class="btn-group me-2" role="group" aria-label="Second group">
                  <a class="btn btn-outline-dark" href={{ url('inventory') }}>View Inventories</a>
                </div>
                <div class="btn-group" role="group" aria-label="Third group">
                  <a class="btn btn-outline-dark" href={{ url('inventory/create') }}>Add New</a>
                </div>
              </div>
          </div>
        </div>
      </nav>
    <div class="container">
        @yield('content')
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
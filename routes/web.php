<?php

use App\Http\Controllers\InventoryController;
use App\Models\Inventory;
use Illuminate\Support\Facades\Route;

// Route::get('/view', [InventoryController::class, 'index']);
// Route::get('/add', [InventoryController::class, 'create']);

Route::resource('inventory', InventoryController::class);
    
Route::get('/', function () {
    return view('welcome');  
    });

 

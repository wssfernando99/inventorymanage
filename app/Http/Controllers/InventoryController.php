<?php

namespace App\Http\Controllers;
use App\Models\Inventory;
// use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


use function Laravel\Prompts\alert;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventories = Inventory::all();

        return view('inventory.inventoryview',compact('inventories'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inventory.inventoryadd');
    }        
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules =[
            'category' => 'required',
            'brandname' => 'required',
            'devicename' => 'required',
            'model' => 'required',
            'description' =>'required'
        ];
        $messages = [
            'required' => 'required', // Custom message for all required fields
        ];
        $validator = Validator::make($request->all(),$rules,$messages);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        };

        Inventory::create([
            'catogory' => $request->category,
            'brandname' => $request->brandname,
            'name' => $request->devicename,
            'model' => $request->model,
            'description' => $request->description,
            'quantity' => $request->quantity,
        ]);
    
        return redirect('inventory')->with('message','Successfully Added!');
    } 

    /**
     * Display the specified resource.
     */
    public function show(inventory $inventory)
    {
        return view('inventory.inventoryshow',compact('inventory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inventory $inventory)
    {
        return view('inventory.inventoryedit',compact('inventory'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, inventory $inventory)
    {
        $inventory->update([
            'catogory' => $request->category,
            'brandname' => $request->brandname,
            'name' => $request->devicename,
            'model' => $request->model,
            'description' => $request->description,
            'quantity' => $request->quantity,

        ]);
        return redirect('inventory/'.$inventory->id)->with('message','Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(inventory $inventory)
    {
        $inventory->delete();
        return redirect('inventory')->with('message','Record Deleted');
    }
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'catogory',
        'brandname',
        'name',
        'model',
        'description',
        'quantity'
    ];
    // Disable timestamps
    public $timestamps = false;
}

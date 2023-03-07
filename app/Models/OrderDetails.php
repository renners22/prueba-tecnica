<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;
    protected $table = 'Orders_details';
    
    protected $fillable = [
        'articulo',
        'cantidad',
        'precio',
        'total',
        'id_orders',
    ];
}

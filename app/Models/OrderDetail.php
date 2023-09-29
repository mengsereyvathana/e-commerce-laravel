<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $table = "order_details";
    protected $guarded = ["id"];

    public function products () {
        return $this->belongsTo(Product::class, 'p_id');
    }
}

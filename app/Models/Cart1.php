<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart1 extends Model
{
    protected $table = 'cart1';
    protected $primaryKey ='Masanpham';
    public $incrementing = false;
    protected $typeKey = 'string';
    protected $fillable = ['Masanpham','NameProduct', 'Price', 'Quantity', 'Notes'];
    public $timestamps = false;
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    protected $table = 'rent';
    protected $fillable = ['customer_id', 'book_id', 'date_rent', 'date_return'];
}

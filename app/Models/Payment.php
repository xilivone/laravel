<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    // Model = Post | Table = Posts by default.
    protected $table = 'payments';
    // Primary key is the id by default, To change it we define a public one.
    public $primaryKey = 'checkNumber';
    // Timestamps
    public $timestamps = true;
    public function customer()
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id', 'id');
    }
}

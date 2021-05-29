<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    // Model = Post | Table = Posts by default.
    protected $table = 'customers';
    // Primary key is the id by default, To change it we define a public one.
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
    public function employee()
    {

        return $this->belongsTo('App\Models\Employee', 'emp_id', 'id');
    }
    public function payment()
    {
        return $this->hasMany('App\Models\Payment', 'customer_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;
    // Model = Post | Table = Posts by default.
    protected $table = 'offices';
    // Primary key is the id by default, To change it we define a public one.
    public $primaryKey = 'officeCode';
    // Timestamps
    public $timestamps = true;

    public function employee()
    {

        return $this->hasMany('App\Models\Employee', 'officeCode', 'officeCode');
    }
}

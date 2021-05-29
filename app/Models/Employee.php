<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Employee extends Model
{
    use HasFactory;

    // Model = Post | Table = Posts by default.
    protected $table = 'employees';
    // Primary key is the id by default, To change it we define a public one.
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
    public $sortable = ['id', 'Firstname', 'Lastname', 'Email', 'officecCode', 'jobTitle'];
    public function customer()
    {

        return $this->hasMany('App\Models\Customer', 'emp_id', 'id');
    }
    public function office()
    {
        return $this->belongsTo('App\Models\Office', 'officeCode', 'officeCode');
    }
}

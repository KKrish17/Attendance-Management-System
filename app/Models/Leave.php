<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{

    protected $table='leave_table';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    /*protected $fillable = [
      
      'name', 'contact_no', 'gender','address',
    ];*/


    public $timestamps = false;

}
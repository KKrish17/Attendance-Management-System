<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{

    protected $table='user';

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
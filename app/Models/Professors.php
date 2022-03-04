<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Professors extends Model
{

    protected $table='teacher';

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
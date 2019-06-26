<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class table_user extends Model
{
    protected $fillable = [
        'Username','Name','Sex','BirthDate'
    ];

    protected $primaryKey = 'Id';
    
    public $timestamps = false; 

    

    protected $table="table_user";
}

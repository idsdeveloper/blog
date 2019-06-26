<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class table_guru extends Model
{
    protected $fillable = [
        'Username','Password','Name','Sex','SubjectCode','BirthDate'
    ];

    protected $primaryKey = 'IdGuru';
    
    public $timestamps = false; 

    public function getDataGuru()
    {
        return $this->hasOne('App\table_subject');
    }

    protected $table="table_guru";
}

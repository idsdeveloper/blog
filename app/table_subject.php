<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class table_subject extends Model
{

    protected $fillable = [
        'SubjectCode','Subject'
    ];

    protected $primaryKey = 'SubjectCode';
    
    public $timestamps = false; 

    public $incrementing = false; 

    

    protected $table="table_subject";

    
    public function getdatasoal()
    {
        return $this->hasMany('App\table_soal','SubjectCode');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class table_soal extends Model
{

    protected $fillable = [
        'TestCode','Difficulity','SubjectCode'
    ];

    protected $primaryKey = 'TestCode';
    
    public $timestamps = false; 
    public $incrementing = false;
    
    protected $table="table_soal";

    public function subject()
    {
        return $this->belongsTo('App\table_subject','SubjectCode');
    }
}

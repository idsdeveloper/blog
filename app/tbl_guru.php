<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_guru extends Model
{
    protected $fillable = [
        'id_guru', 'nama_guru', 'id_jurusan', 'no_telp','alamat_guru'
    ];

    public $timestamps= false;

    protected $primaryKey = 'nis';
    protected $table = 'tbl_guru';
    public $incrementing = false;

    public function jurusan()
    {
        return $this->belongsTo('App\tbl_jurusan','id_jurusan');
    }
}

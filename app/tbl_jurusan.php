<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_jurusan extends Model
{
    protected $fillable = [
        'id_jurusan', 'nama_jurusan', 'ketua_pk'
    ];

    protected $primaryKey = 'id_jurusan';
    protected $table = 'tbl_jurusan';
    public $incrementing = false;

    public function siswa()
    {
        return $this->hasMany('App\tbl_siswa','id_hobi');
    }
    public function guru()
    {
        return $this->hasMany('App\tbl_guru','id_guru');
    }
}

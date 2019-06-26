<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_siswa extends Model
{
    protected $fillable = [
        'nama_siswa', 'jk_siswa', 'alamat_siswa', 'agama_siswa','id_hobi'
    ];

    public $timestamps= false;

    protected $primaryKey = 'nis';
    protected $table = 'tbl_siswa';
    

    public function hobi()
    {
        return $this->belongsTo('App\tbl_hobi','id_hobi')->select('id_hobi','s_hobi','hobi');
    }
    public function jurusan()
    {
        return $this->belongsTo('App\tbl_jurusan', 'id_jurusan');
    }
}
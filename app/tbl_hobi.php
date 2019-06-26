<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_hobi extends Model
{
    protected $fillable = [
        'id_hobi', 's_hobi', 'hobi'
    ];

    protected $primaryKey = 'id_hobi';

    protected $table = 'tbl_hobi';

    public function siswa()
    {
        return $this->hasMany('App\tbl_siswa','id_hobi');
    }
}

<?php

namespace Modules\Klasifikasi\Entities;

use Illuminate\Database\Eloquent\Model;

class KlasifikasiModel extends Model
{
    protected $fillable = [];
    protected $table='tbl_klasifikasi';
    protected $primaryKey = 'id_klasifikasi';
}

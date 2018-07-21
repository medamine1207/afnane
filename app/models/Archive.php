<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Archive extends Model
{
    protected $fillable = ['total_in_archive','total_out_archive','solde_depart_archive','solde_actuel_archive','diff_archive','created_at','updated_at'];
    protected $primaryKey = 'id_archive';
    protected $table = 'tbl_archives';
    protected $dates = ['updat
    ed_at', 'created_at'];
}

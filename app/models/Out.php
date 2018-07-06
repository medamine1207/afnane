<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Out extends Model
{
   protected $fillable = ['montant_out','motif_out','remarque_out','date_out'];
    	protected $primaryKey = 'id_out';

	   
	    //le nom de la table
	    protected $table = 'tbl_outs';
	    

	    protected $dates = ['updated_at', 'created_at'];
}

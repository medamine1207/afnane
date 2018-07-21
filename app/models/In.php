<?php

namespace App\models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class In extends Model
{
    	protected $fillable = ['montant_in','motif_in','remarque_in'];
    	protected $primaryKey = 'id_in';

	   
	    //le nom de la table
	    protected $table = 'tbl_ins';
	    

	    protected $dates = ['updated_at', 'created_at'];




}

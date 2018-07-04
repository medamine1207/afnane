<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class In extends Model
{
    	protected $fillable = ['montant_in','motif_in','remarque_in','date_in'];
    	protected $primaryKey = 'id_in';

	   
	    //le nom de la table
	    protected $table = 'tbl_ins';
	    

	    protected $dates = ['updated_in', 'created_in'];



}

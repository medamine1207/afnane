@extends('layouts.default')
@section('content')


<nav aria-label="breadcrumb" style="margin-top:40px; margin-right: 30px;margin-left: 30px;">
  <ol class="breadcrumb alert-danger">
    <li class="breadcrumb-item active " aria-current="page">veuillez remplir le formulaire des <strong style="color: black;">sorties</strong></li>
  </ol>
</nav>

<form style="margin-left: 10%; margin-right: 10%" action="{{route('archives.store')}}" method="POST">
 {{csrf_field()}}
    <div class="form-group">
	    <label for="f_solde_actuel_archive">Solde actuel</label>
	    <input type="text" value="{{old('f_solde_actuel_archive')}}" class="form-control" name="f_solde_actuel_archive"  placeholder="Entrer votre solde actuel" id="solde_actuel" onkeyup="test();">  
	    {!!$errors->first('f_solde_actuel_archive','<span class="error">:message</span>')!!} 
    </div>

	<div class="form-group">
	    <label for="f_total_in_archive">Total des entrées</label>
	    <input type="text" class="form-control" name="f_total_in_archive" disabled="disabled" value="{{$total_in}}" id="total_entree">   
	</div>

	<div class="form-group">
	    <label for="f_total_out_archive">Total des sorties</label>
	    <input type="text" class="form-control" name="f_total_out_archive" disabled="disabled" value="{{$total_out}}" id="total_sortie">   
    </div>

    <div class="form-group">
	    <label for="f_solde_depart_archive">Solde Départ</label>
	    <input type="text" class="form-control" name="f_solde_depart_archive" value="{{$solde_depart}}" disabled="disabled" id="solde_depart" >   
    </div>


    <div class="form-group">
	    <label for="f_diff_archive">différence</label>
	    <input type="text" class="form-control" name="f_diff_archive" disabled="disabled" id="difference" >   
    </div>

 


</form>

<!--formulaire caché pour calculer et enregistré les donnée sur la base de donnée-->

		<form method="POST" action="{{route('archives.store')}}">
			{{csrf_field()}}

		<div class="form-group">
		<input type="hidden" class="form-control" name="fh_solde_actuel_archive"  id="h_solde_actuel" >
		</div>

		<div class="form-group">	    
	    <input type="hidden" class="form-control" name="fh_total_in_archive" id="h_total_entree">   
		</div>

		<div class="form-group">    
	    <input type="hidden" class="form-control" name="fh_total_out_archive"  id="h_total_sortie">   
    	</div>

		<div class="form-group">
		<input type="hidden" class="form-control" name="fh_solde_depart_archive"  id="h_solde_depart" >
		</div>

		<div class="form-group">	    
	    <input type="hidden" class="form-control" name="fh_diff_archive" id="h_difference" >   
    	</div>

			
			<div class="form-group" style="margin-left: 100px;">
            <a class="btn btn-lg btn-primary" href="{{route('home')}}" role="button"style="width: 200px;margin: 7px;">revenir</a>

            
           <input type="button" name="www" onclick="test();" class="btn btn-lg btn-warning" style="width: 200px;margin: 7px;" value="calculer" >


            <input class="btn btn-lg btn-secondary" type="submit" value="archiver" style="width: 200px;margin: 7px;"><br>       
        	</div> 
        </form>

<script type="text/javascript">

function test()

	{

		var actuel = document.getElementById('solde_actuel').value;
		
		if(isNaN(actuel) || actuel == "" )
		{
			alert('le champs **solde actuel** ne contient pas un nombre valide');
		}
		
		else
		{
		var depart = document.getElementById('solde_depart').value;
		var sortie = document.getElementById('total_sortie').value;
		var entree = document.getElementById('total_entree').value;

		var diff = parseFloat(actuel) - parseFloat(depart) - parseFloat(entree) + parseFloat(sortie);
	
		document.getElementById('difference').value =  diff;
		document.getElementById('h_difference').value =  diff;
		document.getElementById('h_solde_depart').value = depart;
		document.getElementById('h_solde_actuel').value = actuel;
		document.getElementById('h_total_sortie').value = sortie;
		document.getElementById('h_total_entree').value = entree;
		}

	}

	
	
</script>
@stop
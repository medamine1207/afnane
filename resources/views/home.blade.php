@extends('layouts.default')
@section('content')

<h1 style="margin: 20px; text-align: center; text-decoration:  underline ;">Listes des entrées et sorties de caisse du {{Carbon\Carbon::now()->format('d-m-Y')}}</h1>

<table class="table table-striped table-bordered table-sm">
	<legend class="text-warning" style="margin: 10px; text-decoration: underline;">Liste des entrées:</legend>
	 
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Motif d'entré</th>
      <th scope="col">Montant entré</th>
      <th scope="col">date de creation</th>
      <th scope="col">heure de creation</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
    	@if ($ins->count()==0)
    		<td>aucun enregistrement trouvé</td>
    		<td>aucun enregistrement trouvé</td>
    		<td>aucun enregistrement trouvé</td>
    		<td>aucun enregistrement trouvé</td>
    	@else
	    	@foreach ($ins as $in)
	    	<tr>
	      	<td scope="row">{{$in->motif_in}}</td>
	    		
	      	<td>{{$in->montant_in}}</td>
	      	<td>{{Carbon\Carbon::parse($in->created_at)->format('d-m-Y')}}</td>
	      	<td>{{Carbon\Carbon::parse($in->created_at)->format('H:i:s')}}</td>
	      	</tr>
	      	
	      	
	    	@endforeach
    	@endif
      
    </tr>
    
  </tbody>
</table>

<table class="table table-bordered table-striped table-sm">
	 <legend class="text-warning" style="margin: 10px; text-decoration: underline;">Liste des sorties:</legend>
	  <thead class="thead-dark">
	    <tr>
	      
	      <th scope="col">Motif de sortie</th>
	      <th scope="col">Montant sortie</th>
	      <th scope="col">Date creation</th>
	      <th scope="col">Heure Creation</th>
	      
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	    	@if ($outs->count()==0)
	    	
	    		<td>aucun enregistrement trouvé</td>
	    		<td>aucun enregistrement trouvé</td>
	    		<td>aucun enregistrement trouvé</td>
	    		<td>aucun enregistrement trouvé</td>
	    	
	    	@else
		    	@foreach ($outs as $out)
		    	<tr>	    		
				      <td>{{$out->motif_out}}</td>
				      <td>{{$out->montant_out}}</td>
				      <td>{{Carbon\Carbon::parse($out->created_at)->format('d-m-Y')}}</td>
	      			  <td>{{Carbon\Carbon::parse($out->created_at)->format('H:i:s')}}</td>
				</tr>
		    	@endforeach					
			@endif
		</tr>    
	  </tbody>
</table>



@stop
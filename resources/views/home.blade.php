@extends('layouts.default')
@section('content')



<nav aria-label="breadcrumb" style="margin: 20px;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Listes des entrées et sorties de caisse du {{Carbon\Carbon::now()->format('d-m-Y')}}</li>
  </ol>
</nav>



<table class="table table-striped table-bordered table-sm">
	<legend class="text-warning" style="margin: 10px;">Liste des entrées:</legend>
	 
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Montant entré</th>
      <th scope="col">Motif d'entré</th>
      <th scope="col">remarques</th>
     
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
	      	<td>{{number_format($in->montant_in , 2, ',', ' ')}}</td>
	      	<td scope="row">{{$in->motif_in}}</td>
	      	<td scope="row">{{$in->remarque_in}}</td>
	    		
	      	
	      	<td>{{Carbon\Carbon::parse($in->created_at)->format('H:i:s')}}</td>
	      	</tr>
	      	
	      	
	    	@endforeach
    	@endif
      
    </tr>
    
  </tbody>
</table>

<table class="table table-bordered table-striped table-sm">
	 <legend class="text-warning" style="margin: 10px;">Liste des sorties:</legend>
	  <thead class="thead-dark">
	    <tr>
	      
	      <th scope="col">Montant sortie</th>
	      <th scope="col">Motif de sortie</th>
	      <th scope="col">remarques</th>
	     
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
				      <td>{{number_format($out->montant_out, 2, ',', ' ')}}</td>
				      <td>{{$out->motif_out}}</td>
				      <td>{{$out->remarque_out}}</td>
				      
	      			  <td>{{Carbon\Carbon::parse($out->created_at)->format('H:i:s')}}</td>
				</tr>
		    	@endforeach					
			@endif
		</tr>    
	  </tbody>
</table>
<script src="//code.jquery.com/jquery.js"></script>
@include('flashy::message')
@stop
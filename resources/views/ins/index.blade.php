@extends('layouts.default')
@section('content')
<h1>teste de la page index des entrées:</h1>

<div class="container-fluid">
<form style="padding: 10px;margin: 10px;">
  <div class="form-group">
    <label for="formGroupExampleInput">Montant entrée en caisse</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="saisissez le montant entrée en caisse">  
  </div>

 <label style="display: block;">selectionner le motif d'entrée de caisse</label>
<div class="form-group form-control">
 
		<label class="radio-inline"><input type="radio" name="optradio"> service cash plus</label>
		
		<label class="radio-inline" style="margin-left: 10px;"><input type="radio" name="optradio"> recharge telecom</label>
		
		<label class="radio-inline" style="margin-left:10px;"><input type="radio" name="optradio"> alimentation directe</label>
		
		<label class="radio-inline" style="margin-left:10px;"><input type="radio" name="optradio"> autres </label>
</div>

<div class="form-group">
    <label for="exampleFormControlTextarea1">remarques</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
  </div>

  
</form>
</div>

@stop
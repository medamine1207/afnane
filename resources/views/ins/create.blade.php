@extends('layouts.default')
@section('content')
<nav aria-label="breadcrumb" style="margin: 20px;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">veuillez remplir le formulaire des <strong>entrées</strong></li>
  </ol>
</nav>


<div class="container-fluid has-error">
    <form style="padding: 10px;margin: 10px;" method="POST" action="{{route('ins.store')}}">
      {{csrf_field()}}

          <div class="form-group" >
            <label for="f_montant_in" class="control-label">Montant entrée en caisse</label>
            <input type="text" class="form-control has-error" id="f_montant_in" placeholder="saisissez le montant entrée en caisse" name="f_montant_in" value="{{old('f_montant_in')}}" >  
              {!!$errors->first('f_montant_in','<span class="help-block">:message</span>')!!}
          </div>

         <label style="display: block;">selectionner le motif d'entrée de caisse</label>
        <div class="form-group form-control">
         
        		<label class="radio-inline"><input type="radio" name="f_motif_in"> service cash plus</label>
        		
        		<label class="radio-inline" style="margin-left: 10px;"><input type="radio" name="f_motif_in" value="recharge telecom"> recharge telecom</label>
        		
        		<label class="radio-inline" style="margin-left:10px;"><input type="radio" name="f_motif_in" value="alimentation directe"> alimentation directe</label>
        		
        		<label class="radio-inline" style="margin-left:10px;"><input type="radio" name="f_motif_in" value="autres">  autres</label>
        </div>

        <div class="form-group">
            <label for="f_remarque_in">remarques</label>
            <textarea class="form-control" placeholder="ajoutez une remarque" name="f_remarque_in" id="f_remarque_in" rows="6" >{{old('f_remarque_in')}}</textarea>
         </div>

         <div class="form-group">

            <input type="submit" class="btn btn-lg btn-success" name="aaa" id="" value="Valider" style="width: 200px; margin: 7px;">

            <a class="btn btn-lg btn-primary" href="{{route('home')}}" role="button"style="width: 200px;margin: 7px;">revenir</a>

            <input class="btn btn-lg btn-secondary" type="reset" value="vider les champs" style="width: 200px;margin: 7px;"><br>

            
        </div>  
    </form>
</div>

@stop
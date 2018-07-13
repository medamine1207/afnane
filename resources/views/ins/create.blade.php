@extends('layouts.default')
@section('content')

<nav aria-label="breadcrumb" style="margin-top:40px; margin-right: 30px;margin-left: 30px;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">veuillez remplir le formulaire des <strong style="color: black;">entrées</strong></li>
  </ol>
</nav>


<div class="container-fluid ">
    <form style="padding: 10px;margin: 10px;" method="POST" action="{{route('ins.store')}}">
      {{csrf_field()}}

          <div class="form-group {{$errors->has('f_montant_in')?'has-error':''}}">
            <label for="f_montant_in" class="control-label">Montant entrée en caisse</label>
            <input type="text" class="form-control" id="f_montant_in" placeholder="saisissez le montant entrée en caisse" name="f_montant_in" value="{{old('f_montant_in')}}" >  
              {!!$errors->first('f_montant_in','<span class="help-block">:message</span>')!!}
          </div>
        <div class="{{$errors->has('f_motif_in')?'has-error':''}}">
             <label style="display: block;" class="control-label">selectionner le motif d'entrée de caisse</label>
            <div class="form-group form-control" >
             
            		<label class="radio-inline"><input type="radio" name="f_motif_in" value="service cash plus"> service cash plus</label>
            		
            		<label class="radio-inline" style="margin-left: 10px;"><input type="radio" name="f_motif_in" value="recharge telecom"> recharge telecom</label>
            		
            		<label class="radio-inline" style="margin-left:10px;"><input type="radio" name="f_motif_in" value="alimentation directe" > alimentation directe</label>
            		
            		<label class="radio-inline" style="margin-left:10px;"><input type="radio" name="f_motif_in" value="autres">  autres</label>
            </div>
            {!!$errors->first('f_motif_in','<span class="help-block">:message</span>')!!}
        </div>
        <div class="form-group {{$errors->has('f_remarque_in')?'has-error':''}}" style="border-color: red;">
            <label for="f_remarque_in" class="control-label">remarques</label>
            <textarea class="form-control" placeholder="ajoutez une remarque" name="f_remarque_in" id="f_remarque_in" rows="6" >{{old('f_remarque_in')}}</textarea>
            {!!$errors->first('f_remarque_in','<span class="help-block">:message</span>')!!}
         </div>

         <div class="form-group">

            <input type="submit" class="btn btn-lg btn-success" name="aaa" id="" value="Valider" style="width: 200px; margin: 7px;">

            <a class="btn btn-lg btn-primary" href="{{route('home')}}" role="button"style="width: 200px;margin: 7px;">revenir</a>

            <input class="btn btn-lg btn-secondary" type="reset" value="vider les champs" style="width: 200px;margin: 7px;"><br>

            
        </div>  
    </form>
</div>

@stop
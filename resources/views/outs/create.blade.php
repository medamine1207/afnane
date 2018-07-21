@extends('layouts.default')
@section('content')

<nav aria-label="breadcrumb" style="margin-top:40px; margin-right: 30px;margin-left: 30px;">
  <ol class="breadcrumb alert-danger">
    <li class="breadcrumb-item active " aria-current="page">veuillez remplir le formulaire des <strong style="color: black;">sorties</strong></li>
  </ol>
</nav>


<div class="container-fluid ">
    <form style="padding: 10px;margin: 10px;" method="POST" action="{{route('outs.store')}}">
      {{csrf_field()}}

          <div class="form-group {{$errors->has('f_montant_out')?'has-error':''}}">
            <label for="f_montant_out" class="control-label">Montant sortie de caisse</label>
            <input type="text" class="form-control" id="f_montant_out" placeholder="saisissez le montant sortie de caisse" name="f_montant_out" value="{{old('f_montant_out')}}" >  
              {!!$errors->first('f_montant_out','<span class="help-block">:message</span>')!!}
          </div>
        <div class="{{$errors->has('f_motif_out')?'has-error':''}}">
             <label style="display: block;" class="control-label">selectionner le motif de sortie de caisse</label>
            <div class="form-group form-control" >
             
            		<label class="radio-inline"><input type="radio" name="f_motif_out" value="service cash plus"> service cash plus</label>
            		
            		<label class="radio-inline" style="margin-left: 10px;"><input type="radio" name="f_motif_out" value="recharge telecom"> recharge telecom</label>
            		
            		<label class="radio-inline" style="margin-left:10px;"><input type="radio" name="f_motif_out" value="dépense" > dépense</label>
            		
            		<label class="radio-inline" style="margin-left:10px;"><input type="radio" name="f_motif_out" value="autres">  autres</label>
            </div>
            {!!$errors->first('f_motif_out','<span class="help-block">:message</span>')!!}
        </div>
        <div class="form-group {{$errors->has('f_remarque_out')?'has-error':''}}" style="border-color: red;">
            <label for="f_remarque_out" class="control-label">remarques</label>
            <textarea class="form-control" placeholder="ajoutez une remarque" name="f_remarque_out" id="f_remarque_out" rows="6" >{{old('f_remarque_out')}}</textarea>
            {!!$errors->first('f_remarque_out','<span class="help-block">:message</span>')!!}
         </div>

         <div class="form-group">

            <input type="submit" class="btn btn-lg btn-danger" name="aaa" id="" value="Valider" style="width: 200px; margin: 7px;">

            <a class="btn btn-lg btn-primary" href="{{route('home')}}" role="button"style="width: 200px;margin: 7px;">revenir</a>

            <input class="btn btn-lg btn-secondary" type="reset" value="vider les champs" style="width: 200px;margin: 7px;"><br>

            
        </div>  
    </form>
</div>

@stop
@extends('layouts.default')
@section('content')
{{url()->current()}}
<br>
{{route('ins.index')}}
<h1 style="text-decoration: underline;">test de index ins</h1>
@stop
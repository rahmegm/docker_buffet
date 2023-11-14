@extends('layouts.main')
@section ('title', 'eventos')
@section ('content')


@if ($busca !='')
<p> Você está buscando por: {{ $busca }} </p>
@endif

@endsection





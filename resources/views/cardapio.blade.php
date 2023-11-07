@extends('layouts.main')
@section ('title', 'cardapio')
@section ('content')
<h1>Escolha seu cardárpio =) </h1>


@foreach ($cardapio as $i)
<p> {{ $i }} </p>
@endforeach

<br>   
@php
 $nome= "Pedro";
 print "$nome"

@endphp
<br>
<a href="/">Voltar para a página inicial</a>
@endsection
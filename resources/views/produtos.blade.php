@extends('layouts.main')
@section ('title', 'Produtos')
@section ('content')
<h1>Essa é a página de produtos =) </h1>

@for ($i=0; $i < count($arr); $i++)
    <p> {{ $arr [$i] }} - {{ $i }} </p>
    @if ($i == 2)
    <p>O índice é igual a 2</p>
    @endif
@endfor
<br>

@foreach ($nomess as $i)
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
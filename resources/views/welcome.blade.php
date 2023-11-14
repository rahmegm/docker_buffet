@extends('layouts.main')

@section('title', 'Buffet Magic Castle')

@section ('content')
        <h1> Buffet Magic Castle </h1>
        
  
        <br>
<div id= "search-container" class="col-md-12">
  <h2>Busque uma reserva</h2>
  <form action="">
<input type="text" id="search"  name="search" class="form-control" placeholder="Procurar...">
  </form>
</div>

<div id= "reservas-container" class= "col-md-12">
  <h2>Próximas Festas </h2>
  <p>Veja os eventos dos próximos dias</p>
      <div id="cards-container" class= "row">
          @foreach ($reservas as $reserva)
              <div class="card col-md-3">
    <img src="/img/banner.jpg", width="600px", height="400px" alt= "{{$reserva-> title}}">
                    <div class= "card-body">
      <p class="card-date">10/11/2023</p>
      <h5 class="card-title">{{$reserva->title}}</h5>
      <p class= "card-participants"> X Convidados</p>
      <a href="#" class="btn btn-primary" >Saber Mais</a>
                    </div>
             </div>
          @endforeach
      </div>
</div>
@endsection
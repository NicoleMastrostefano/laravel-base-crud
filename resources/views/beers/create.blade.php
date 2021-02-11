@extends('layouts.main')
@section('header')
  <h1 style="text-align:center"class="mt-5">Crea una nuova birra</h1>
@endsection
@section('content')
<form action="{{route('beers.store')}}" method="post">
  @csrf
  @method('POST')
  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text"class="form-control" name="nome" placeholder="Nome">
  </div>
  <div class="form-group">
    <label for="marca">Marca</label>
    <input type="text" class="form-control" name="marca" placeholder="marca">
  </div>
  <div class="form-group">
    <label for="prezzo">Prezzo</label>
    <input type="text" class="form-control" name="prezzo" placeholder="prezzo">
  </div>
  <div class="form-group">
    <label for="alc_vol">Alc_vol</label>
    <input type="text" class="form-control" name="alc_vol" placeholder="alc_vol">
  </div>
  <div class="form-group">
    <label for="descrizione">Descrizione</label>
    <input type="text" class="form-control" name="descrizione" placeholder="descrizione">
  </div>
  <input type="submit" value="Invia">
</form>
@endsection

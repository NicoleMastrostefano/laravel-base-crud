@extends('layouts.main')

@section('header')
  <h1 style="text-align:center"class="mt-5">Crea una nuova birra</h1>
@endsection

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('beers.store') }}" method="post">
  @csrf
  @method('POST')
  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text"class="form-control" id='nome' name="nome" placeholder="nome" value="{{ old('nome') }}">
  </div>
  <div class="form-group">
    <label for="marca">Marca</label>
    <input type="text" class="form-control" id='marca'name="marca" placeholder="marca"value="{{ old('marca') }}">
  </div>
  <div class="form-group">
    <label for="prezzo">Prezzo</label>
    <input type="text" class="form-control" id='prezzo'name="prezzo" placeholder="prezzo"value="{{ old('prezzo') }}">
  </div>
  <div class="form-group">
    <label for="alc_vol">Alc_vol</label>
    <input type="text" class="form-control" id='alc_vol'name="alc_vol" placeholder="alc_vol"value="{{ old('alc_vol') }}">
  </div>
  <div class="form-group">
    <label for="descrizione">Descrizione</label>
    <input type="text" class="form-control" id='descrizione' name="descrizione" placeholder="descrizione"
    value="{{ old('descrizione') }}">
  </div>

  <div class="text-right">
    <input type="submit" value="Invia"class="btn btn-primary">
  <a href="{{route('beers.index') }}"class="btn btn-dark">Indietro</a>
  </div>

</form>
@endsection

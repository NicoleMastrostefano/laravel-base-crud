@extends('layouts.main')

@section('header')
  <h1 style="text-align:center"class="mt-5">Birra artigianale: le migliori IPA italiane</h1>
@endsection

@section('content')
@if (session('message'))
<div class="alert alert-success">
  {{ session('message') }}
</div>
@endif

<table class="table table-dark table-striped table-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Marca</th>
      <th>Prezzo</th>
      <th>Alc/Vol</th>
      <th>Descrizione</th>
      <th>Creato il</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($beers as $beer)
    <tr>
      <td> {{ $beer->id }}</td>
      <td> {{ $beer->nome }}</td>
      <td> {{ $beer->marca }}</td>
      <td> {{ $beer->prezzo }}€</td>
      <td> {{ $beer->alc_vol }}%</td>
      <td> {{ $beer->descrizione }}</td>
      <th> {{ $beer->created_at }}</th>
      <td>
        <a href="{{ route('beers.show',$beer->id) }}" class="btn btn-outline-light"><i class="fas fa-search-plus"></i></a>
      </td>
      <td>
        <a href="{{ route('beers.edit',$beer->id) }}" class="btn btn-outline-light"><i class="fas fa-pencil-alt"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection

@section('footer')
<div class="text-right">
  <a href="{{ route('beers.create')}}"class="btn btn-lg btn-dark">Crea un nuovo record</a>
</div>
@endsection

@extends('layouts.main')

@section('header')
  <h1 class="mt-5">Birra artigianale: le migliori IPA italiane</h1>
@endsection

@section('content')
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
        <a href="{{ route('beers.show',['beer'=>$beer->id]) }}" class="btn btn-outline-light">Mostra</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection

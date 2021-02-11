<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"
  </head>
  <body>
    <main id="container">
      <h1>Birra artigianale: le migliori IPA italiane</h1>
      <table class="table table-dark table-striped table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Marca</th>
            <th>Prezzo</th>
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
            <td> {{ $beer->descrizione }}</td>
            <th> {{ $beer->created_at }}</th>
            <td>
              <a href="{{ route('beers.show',['beer'=>$beer->id]) }}" class="btn btn-outline-light">Mostra</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </main>
  </body>
</html>

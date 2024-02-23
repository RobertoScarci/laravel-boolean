<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nome</th>
                <th scope="col">Ingredienti</th>
                <th scope="col">Procedimento</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Url Image</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($cocktails as $cocktail)
            <tr>
            <th scope="row">{{ $cocktail->id }}</th>
            <td>{{ $cocktail->name }}</td>
            <td>{{ $cocktail->ingredients }}</td>
            <td>{{ $cocktail->description }}</td>
            <td>{{ $cocktail->price }} €</td>
            <td>{{ $cocktail->image }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
        
</body>
</html>
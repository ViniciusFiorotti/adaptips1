<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
</head>

<body>
    <a href="{{ route('movie.create') }}"><button>Criar</button></a>
    <form action="{{route('movie.index') }}" method="GET">
        <input type="text" id="search" name="search" class="form-control"><button type="submit">Procurar</button>
    </form>
    @foreach ($movies as $movie)
        <h4>{{ $movie->title }}</h4>
        <p>{{ $movie->country->name }}</p>
        <img src="storage/{{ $movie->image }}" alt="Imagem" width="80" height="100" />
        <a href="{{ route('movie.edit', $movie->id) }}"><button type="submit">Editar</button></a>
        <form action="{{route('movie.destroy',$movie->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Deletar</button>
    @endforeach
</body>

</html>

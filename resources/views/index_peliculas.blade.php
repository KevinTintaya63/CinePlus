<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('store.pelicula') }}">Create new note</a>
    <ul>
        @forelse ($peliculas as $pelicula)
            <li><p>{{ $pelicula->titulo }}</p> 
                <a href="{{ route('edit.pelicula',$pelicula->id)}}">Edit</a>
                {{-- <form action="{{ route('note.destroy',$note->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete">
                </form> --}}hola mundo
            </li>
        @empty
            <p>No data</p>
        @endforelse
    </ul>

</body>
</html>
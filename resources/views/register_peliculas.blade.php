<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('index.pelicula') }}">Back</a>
    <form action="{{ route('register.pelicula') }}" method="post" enctype="multipart/form-data">
        @csrf
    
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" required><br>
    
        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" required></textarea><br>
    
        <label for="img_first">Imagen 1:</label>
        <input type="file" name="img_first" accept="image/*" required><br>
    
        <label for="img_second">Imagen 2:</label>
        <input type="file" name="img_second" accept="image/*" ><br>
    
        <label for="img_third">Imagen 3:</label>
        <input type="file" name="img_third" accept="image/*" ><br>
    
        <label for="categoria">Categoría:</label>
        <input type="text" name="categoria" required><br>
    
        <label for="calificacion">Calificación:</label>
        <input type="number" name="calificacion" min="1" max="5" required><br>
    
        <label for="url_first">URL 1:</label>
        <input type="text" name="url_first" ><br>
    
        <label for="url_second">URL 2:</label>
        <input type="text" name="url_second" ><br>
    
        <label for="url_third">URL 3:</label>
        <input type="text" name="url_third" ><br>
    
        <label for="url_four">URL 4:</label>
        <input type="text" name="url_four" ><br>
    
        <button type="submit">Guardar Película</button>
    </form>
    


</body>
</html>
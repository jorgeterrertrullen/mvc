<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>crea un usuario</h1>
    <form action="/usuario/mostrar" method="post">

        <label>name</label>
        <input type="text" name="name">
        
        <br>

        <label>apellido</label>
        <input type="text" name="apellido">

        <br>
        <label for="">Sexo</label>
        <select name="sexo" id="">
            <option value="">Dime uno</option>
            <option value="H">hombre</option>
            <option value="M">mujer</option>

        </select>

        <br>

        <div>
            <label for="">Aficciones</label><br>
            <input type="checkbox" name="aficiones[]" value="futboll">furboll
            <input type="checkbox" name="aficiones[]" value="musica">musica
            <input type="checkbox" name="aficiones[]" value="montaña">musica

        </div>

        <input type="submit" value="enviar">

    </form>
</body>
</html>
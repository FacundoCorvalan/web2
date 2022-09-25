<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos de limpieza</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
    <h1>Lista de comentarios</h1>
    <form action="add" method="get">
        <div>
            <label class="visually-hidden" for="">Agregar Comentario</label>
            <input class="form-control" type="text" name="comment" id="">
        </div>
        <input class="btn btn-primary mb-3" type="submit" value="Enviar Comentario">
    </form>

<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de pagos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>

    <form action="add" method="get">

        <div class="row">
            <div class="col-9">
                <div class="form-group">
                    <label>Nombre Deudor</label>
                    <input name="debtor" type="text" class="form-control">
                    <label >Nro cuota</label>
                    <input name="cant" type="number" class="form-control">
                    <label >Cuota Capital</label>
                    <input name="amount" type="number" class="form-control">
                    <label >Fecha</label>
                    <input type="date" name="date" id="">
    
                    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
                </div>
            </div>
    
        </div>


    </form>
    



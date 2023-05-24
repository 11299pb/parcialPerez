<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>App de Registro de insumos</title>
</head>
<body>
<div class="container">
    
    <div class="row justify-content-center">
        <form action="/PARCIALPEREZ/controladores/insumos/guardar.php" method="POST" class="col-lg-8 border bg-light p-3">
        <h1 class="text-center">Formulario Para ingreso de Informacion de Insumos</h1>
        <br>
            <div class="row mb-2">
                <div class="col">
                    <label for="insumos_nombre">Ingrese Nombre de Insumos</label>
                    <input type="text" name="insumos_nombre" id="insumos_nombre" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="insumos_existencia">Ingrese Cantidad en Existencia</label>
                    <input type="number" name="insumos_existencia" id="insumos_existencia" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="insumos_marca">Ingrese Marca Del Producto</label>
                    <input type="text" name="insumos_marca" id="insumos_marca" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="insumos_proveedor">Ingrese Primer Nombre y Primer Apellido del Proveedor</label>
                    <input type="text" name="insumos_proveedor" id="insumos_proveedor" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="insumos_precio">Ingrese Precio del Insumo</label>
                    <input type="number" name="insumos_precio" id="insumos_precio" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <button type="submit" class="btn btn-success w-100">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>

    

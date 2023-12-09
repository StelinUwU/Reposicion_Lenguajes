<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proveedores</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <!-- Styles -->
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            padding: 0;
            background: #f7f7f7;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: #fff;
            margin-bottom: 20px;
            padding: 10px 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .header h1 {
            margin: 0;
            color: #333;
        }
        .card {
            background: #fff;
            border: 1px solid #ddd;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            transition: box-shadow 0.3s ease-in-out;
        }
        .card:hover {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        .card-body {
            padding: 20px;
        }
        .card-title {
            margin: 0;
            color: #333;
            font-size: 24px;
            font-weight: 600;
        }
        .card-text {
            color: #666;
            font-size: 16px;
            line-height: 1.5;
            margin: 10px 0;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
        .col-md-4 {
            width: 33.333333%;
            padding: 15px;
        }
    </style>
</head>
<body>
<div class="header">
        <h1>Aquí puedes crear</h1>
    </div>
    <div class="container">
    <h2>Crear Nuevo Proveedor</h2>
        <form method="POST" action="{{ route('proveedores.store') }}">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="fechaRegistro">Fecha de Registro:</label>
                <input type="date" name="fechaRegistro" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" name="telefono" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="correo">Correo Electrónico:</label>
                <input type="email" name="correo" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
</body>
</html>

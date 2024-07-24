<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo mensaje en formulario</title>
</head>
<body>
    <h2>Nuevo mensaje</h2>
    <h4>Ha recibido un nuevo mensaje en el formulario de contacto</h4>
    <p><strong>Nombre: </strong>{{ $data['name'] }}</p>
    <p><strong>Correo Electrónico: </strong>{{ $data['email'] }}</p>
    <p><strong>Teléfono: </strong>{{ $data['phone'] }}</p>
    <p><strong>Mensaje: </strong>{{ $data['message'] }}</p>
</body>
</html>

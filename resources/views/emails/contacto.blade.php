<!DOCTYPE html>
<html>
<head>
    <title>Nuevo contacto</title>
</head>
<body>
    <h1>Nuevo mensaje de contacto</h1>
    
    <p><strong>Nombre:</strong> {{ $contacto->nombre }}</p>
    <p><strong>Email:</strong> {{ $contacto->email }}</p>
    
    @if($contacto->telefono)
    <p><strong>Teléfono:</strong> {{ $contacto->telefono }}</p>
    @endif
    
    <p><strong>Servicio:</strong> {{ $contacto->servicio ?? 'No especificado' }}</p>
    <p><strong>Mensaje:</strong></p>
    <p>{{ $contacto->mensaje }}</p>
    
    <hr>
    <p>Enviado el: {{ now()->format('d/m/Y H:i') }}</p>
</body>
</html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Formulario</h1>

<form action="{{route('Notas.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Ingrese el nota 1:
    <br>
    <input type="nota" name="nota1">
</label>
<br>
<label>
    Ingrese el nota 2: :
    <br>
    <input type="nota" name="nota2">
</label>
<br>
<label>
    Ingrese el nota 3: :
    <br>
    <input type="nota" name="nota3">
</label>
<br><br><br>

<button type="submit">Enviar Formulario:</button>

</form>

</body>
</html>

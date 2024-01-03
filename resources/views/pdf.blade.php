<?php
$nombreImagen = "assets/img/headerSolicitud.png";
$imagenBase64 = "data:image/png;base64," . base64_encode(file_get_contents($nombreImagen));
$nombreImagen_2 = "assets/img/footerSolicitud.png";
$imagenBase64_2 = "data:image/png;base64," . base64_encode(file_get_contents($nombreImagen_2));
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <link href="{{asset('assets/img/udeg.png')}}" rel="icon">
        <title>Perfil de usuario</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        {{-- <x-header></x-header> --}}
    </head>
<body>
  <main id="main" class="main">

    {{-- <h1>PDF</h1> --}}
    <img src="<?php echo $imagenBase64 ?>" alt="UDG" style="width:50%; height:auto; margin: 0;">
    <h3 style="font-family: 'Segoe UI'; text-align: center; margin: 0;">Convocatoria</h3>
    <h3 style="text-align: center;font-family: 'Segoe UI';margin: 0;">Programa de Estímulos Económicos a Estudiantes Sobresalientes</h3>
    <h3 style="text-align: center;font-family: 'Segoe UI';margin-top: 0;">2022</h3>
    <div>
        <table><tr><th style="font-family: 'Segoe UI'; padding-right: 113px; padding-top: 0;">NÚMERO DE REGISTRO<p style="margin-top: 0;background-color: rgb(199, 199, 199);  font-family: 'Segoe UI'; font-weight: normal">{{$registration->registration_number}}</p></th><th style="font-family: 'Segoe UI';padding-left: 30px;padding-right: 30px;  border:2px; border-style:solid;">foto</th><th style="font-family: 'Segoe UI';padding-left: 120px"><p></p><p></p> Promedio <p style="font-family: 'Segoe UI';background-color: rgb(199, 199, 199); font-weight: normal">{{$registration->gpa}}</p></th></tr></table>

        <p style="font-weight: bold;font-family: 'Segoe UI';">DATOS PERSONALES</p>

        <p style="font-family: 'Segoe UI';"> <strong> Apellidos:</strong> <u style="background-color:rgb(199, 199, 199)"> {{$registration->lastname}}</u></p>
        <p style="font-family: 'Segoe UI';"> <strong> Nombre (s):</strong> <u style="background-color:rgb(199, 199, 199)">{{$registration->firstname}} </u></p>
        <p style="font-family: 'Segoe UI';"> <strong> Edad: </strong><u style="background-color:rgb(199, 199, 199)"> {{$registration->age}} </u>
        <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Teléfono: </strong> <u style="background-color:rgb(199, 199, 199)">{{$registration->phone}}</u>
        <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sexo: </strong> <u style="background-color:rgb(199, 199, 199)">{{$registration->gender}} </u></p>
        <p style="font-family: 'Segoe UI';"> <strong> Correo: </strong><u style="background-color:rgb(199, 199, 199)">{{$registration->user->email}}</u></p>
        <p style="font-family: 'Segoe UI';"> <strong> Carrera: </strong><u style="background-color:rgb(199, 199, 199)">{{$registration->career}}</u>
        <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Código: </strong> <u style="background-color:rgb(199, 199, 199)">{{$registration->code}} </u></p>
        <p style="font-family: 'Segoe UI';"> <strong> Escuela o CU: </strong><u style="background-color:rgb(199, 199, 199)"> CUCEI </u></p>
        <p style="font-family: 'Segoe UI';"> <strong> Grado: </strong><u style="background-color:rgb(199, 199, 199)"> {{$registration->grade}} </u>
        <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Turno: </strong><u style="background-color:rgb(199, 199, 199)">{{$registration->shift}}</u></p>
        <p style="font-family: 'Segoe UI';"> <strong> Modalidad: </strong> <u style="background-color:rgb(199, 199, 199)">{{$registration->modality}}</u></p>
        <p style="font-family: 'Segoe UI';"> <strong> Lugar: </strong> <u style="background-color:rgb(199, 199, 199)">Guadalajara, Jalisco </u></p>
    </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</main>
<img src="<?php echo $imagenBase64_2 ?>" alt="UDG" style="width:100%; height:auto">
</body>
</html>

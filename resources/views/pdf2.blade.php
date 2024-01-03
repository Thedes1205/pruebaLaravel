<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/file" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="file" class="col-sm-3 col-form-label">Expediente: </label>
        <input type="file" name="file" required> <br>
        @error('file')
        <div class="alert alert-danger">{{$message}}</div>
        <br>
        @enderror
        {{-- <label for="solicitud" class="col-sm-3 col-form-label">Solicitud: </label>
        <input type="file" name="solicitud" required> <br>
        @error('solicitud')
        <div class="alert alert-danger">{{$message}}</div>
        <br>
        @enderror
        <label for="socieconomico" class="col-sm-3 col-form-label">Cuestionario socieconomico: </label>
        <input type="file" name="socieconomico" required> <br>
        @error('socieconomico')
        <div class="alert alert-danger">{{$message}}</div>
        <br>
        @enderror
        <label for="compromiso" class="col-sm-3 col-form-label">Carta compromiso: </label>
        <input type="file" name="compromiso" required> <br>
        @error('compromiso')
        <div class="alert alert-danger">{{$message}}</div>
        <br>
        @enderror
        <label for="recomendacion" class="col-sm-3 col-form-label">Cartas de recomendacion: </label>
        <input type="file" name="recomendacion" required> <br>
        @error('recomendacion')
        <div class="alert alert-danger">{{$message}}</div>
        <br>
        @enderror
        <label for="ingresos" class="col-sm-3 col-form-label">Comprobante de ingresos: </label>
        <input type="file" name="ingresos" required> <br>
        @error('ingresos')
        <div class="alert alert-danger">{{$message}}</div>
        <br>
        @enderror
        <label for="domicilio" class="col-sm-3 col-form-label">Comprobante de domicilio: </label>
        <input type="file" name="domicilio" required> <br>
        @error('domicilio')
        <div class="alert alert-danger">{{$message}}</div>
        <br>
        @enderror
        <label for="kardex" class="col-sm-3 col-form-label">Kardex certificado: </label>
        <input type="file" name="kardex" required> <br>
        @error('kardex')
        <div class="alert alert-danger">{{$message}}</div>
        <br>
        @enderror
        <label for="situacion" class="col-sm-3 col-form-label">Constancia de situacion fiscal: </label>
        <input type="file" name="situacion" required> <br>
        @error('situacion')
        <div class="alert alert-danger">{{$message}}</div>
        <br>
        @enderror
        <label for="curp" class="col-sm-3 col-form-label">CURP: </label>
        <input type="file" name="curp" value="{{old('curp')}}" required> <br>
        @error('curp')
        <div class="alert alert-danger">{{$message}}</div>
        <br>
        @enderror --}}
        <input type="submit" value="subir">
    </form>
</body>
</html>

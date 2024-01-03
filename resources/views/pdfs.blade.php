<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <title>Expedientes</title>
    <x-header></x-header>
</head>
<x-navbar></x-navbar>
<body>
    <main id="main" class="main">
        <section class="section dashboard">
          <section class="section ms-4">
            <h1>EXPEDIENTES</h1>
            <div class="card mt-3"style="width: 80%">
                <div class="card-body mt-2">
                    <table class="table border-primary mt-3 responsive " id="expedientes">
                        <thead class="bg-black">
                            <tr class="rounded-top bg-primary p-2 text-white bg-opacity-75">
                              <th scope="col">Usuario</th>
                              <th scope="col">PDF</th>
                              <th scope="col">Evaluar</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($files as $file)
                            @if ($file->status->status=="En revision")
                            <tr>
                                <td>
                                    <span>{{$file->registration->registration_number}}</span>
                                </td>
                                <td>
                                    <a href="/file/{{$file->id}}">Descargar expediente</a>
                                </td>
                                <td><button class="btn btn-primary text-white"><a href="/status/{{$file->status->id}}/edit" class="text-white">Evaluar</a></button></td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
          </section>
        </section>
</main>
</body>
<x-script></x-script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function () {
    $('#expedientes').DataTable();
});
</script>
</html>

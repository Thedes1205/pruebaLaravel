<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('assets/img/udeg.png')}}" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <x-header></x-header>
    <title>Detalles de pregunta</title>
    <x-navbar></x-navbar>
</head>
<body>

    <main id="main" class="main">
        <section class="section dashboard">
            <section class="section ms-4 me-4">
                <div class="container">
                    <div class="card border border-info rounded-3 border border-5" style="width: 80%">
                    <h5 class="ms-5 mt-2 ps-2 fw-bold border-info  border-bottom card-title" style="width: 90%">{{$question->message}}</h5>
                      <div class="card ms-5" style="width: 90%">
                        <div class="card-body mt-2">
                            @if (empty($respuestas[0]))
                                <p>Esta pregunta aun no tiene respuestas</p>
                                <a class="btn btn-info text-white fw-bold rounded-pill mt-2 mb-2" href="javascript: history.go(-1)"><i class="bi bi-reply"></i>Volver</a>
                            @else
                                <table class="table border-primary mt-3 responsive" id="respuestas">
                                    <thead class="bg-black">
                                    <tr class="rounded-top bg-info text-white">
                                        <th>Usuario</th>
                                        <th scope="col">Respuestas</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($respuestas as $respuesta)
                                        <tr>
                                          <td>{{isset($respuesta)?$respuesta->user->name:''}}</td>
                                        <td>{{isset($respuesta)?$respuesta->message:''}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                          @endif
                          <a class="btn btn-primary fw-bold rounded-pill mt-2 mb-2" href="/reply/{{$question->id}}"><i class="bi bi-pencil-square"></i> Responder</a>
                        </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </main>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
</body>
<x-script></x-script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function () {
    $('#respuestas').DataTable();
});
</script>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('assets/img/udeg.png')}}" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <title>Foro</title>
    <x-header></x-header>
</head>
<x-navbar></x-navbar>
<body>
    <main id="main" class="main">
        <section class="section dashboard">
            <section class="section ms-4">
                <div class="container">
                    <h1 class="text-center fw-bold text-info">Foro <img src="{{asset('assets/img/foro_inicio.png')}}" alt="foro"></h1>



                    <div class="row justify-content-center">
                            <div class="container-fluid" style="width: 80%">
                              <span class="navbar-brand mb-0 h1"><a class="btn border border-3 btn-white border border-info bg-white text-primary fw-bold rounded-pill" href="{{route('question.create')}}">Haz una pregunta <i class="bi bi-chat-text"></i></a></span>
                            </div>

                        <div class="card mt-3" style="width: 80%">
                        <div class="card-body mt-2">
                        <table class="table border-primary mt-3 responsive" id="foro">
                            <thead class="bg-black">
                              <tr class="rounded-top bg-primary p-2 text-white bg-opacity-75">
                                <th scope="col">Usuario</th>
                                <th scope="col">Pregunta</th>
                                <th scope="col">acciones</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($preguntas as $pregunta)
                              <tr>
                                <th scope="row">{{$pregunta->user->name}}</th>
                                <td>{{$pregunta->message}}</td>
                                <td>
                                  <a class="btn border border-3 btn-white border border-info bg-white text-primary fw-bold rounded-pill" href="/question/{{$pregunta->id}}"><i class="bi bi-eye"></i> Ver respuestas</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                          </table>
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
    $('#foro').DataTable();
});
</script>
</html>

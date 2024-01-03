<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('assets/img/udeg.png')}}" rel="icon">
    <x-header></x-header>
    <title>Respuestas</title>
</head>
<x-navbar></x-navbar>
<body>
    <main id="main" class="main">
        <section class="section dashboard">
            <section class="section ms-4">
                <div class="container">
                    <h1 class="ms-5 fw-bold text-center text-info">Respuestas</h1>
                    <div class="row justify-content-center">
                    <div class="card col-10 m-5 border border-info rounded-3 border border-5" style="width: 65%">

                        <div class="card-body">

                          <div class="pt-4 pb-2">
                            <h5 class="card-title text-center pb-0 fs-4 fw-bold">Foro <img src="{{asset('assets/img/foro.png')}}" alt="foro"> </h5>
                            <h5 class="card-title  text-center ms-5">{{$question->message}}</h5>
                          </div>

                          <form class="row g-3 needs-validation" novalidate action="{{route('reply.store')}}" method="POST">
                            @csrf
                            <div class="col-12">
                                <input type="hidden" name="question_id" id="question_id" class="form-control" value="{{$question->id}}" readonly>
                              <label for="message" class="card-title fw-bold ">Mensaje</label>
                              <div class="input-group has-validation">
                                <textarea class="form-control" placeholder="Escribe tu pregunta para el foro aquí" id="floatingTextarea" name="message" required>{{old('message')}}</textarea>
                                <div class="invalid-feedback">Por favor introduce un mensaje de respuesta</div>
                              </div>
                            </div>
                            <div class="col-12">
                              <button class="btn btn-primary w-100 fw-bold" type="submit"><i class="bi bi-send"></i> Enviar al foro</button>
                            </div>
                          </form>
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
</html>

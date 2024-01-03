<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('assets/img/udeg.png')}}" rel="icon">
    <title>Foro</title>
    <x-header></x-header>
</head>
<x-navbar></x-navbar>
<body>
    <main id="main" class="main">

        <section class="section dashboard">
          <section class="section ms-4">
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
      
                    <div class="d-flex justify-content-center py-4">
                      <a href="index.html" class="logo d-flex align-items-center w-auto">
                        <img src="{{asset('assets/img/udg.png')}}" alt="">
                        <span class="d-none d-lg-block">PEEES-CUCEI</span>
                      </a>
                    </div><!-- End Logo -->
      
                    <div class="card mb-3">
      
                      <div class="card-body">
      
                        <div class="pt-4 pb-2">
                          <h5 class="card-title text-center pb-0 fs-4 fw-bold">Foro <img src="{{asset('assets/img/foro.png')}}" alt="foro"> </h5>
                          <p class="text-center small">Escribemos tus dudas para enviarlas al foro</p>
                        </div>
      
                        <form class="row g-3 needs-validation" novalidate action="{{route('question.store')}}" method="POST">
                          @csrf
                          <div class="col-12">
                            <label for="message" class="card-title fw-bold ">Mensaje</label>
                            <div class="input-group has-validation">
                              <textarea class="form-control" placeholder="Escribe tu pregunta para el foro aquí" id="floatingTextarea" name="message" required>{{old('message')}}</textarea>
                              <div class="invalid-feedback">Por favor introduce un mensaje</div>
                            </div>
                          </div>
      
                          <div class="col-12">
                            <button class="btn btn-primary w-100" type="submit"><i class="bi bi-send"></i> Enviar al foro</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
        </section>
        </section>
      </main>
   
</body>
<x-script></x-script>
</html>
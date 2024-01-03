<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <link href="{{asset('assets/img/udeg.png')}}" rel="icon">
        <title>formulario de contacto</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

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
              <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

                <div class="d-flex justify-content-center py-4">
                  <a href="index.html" class="logo d-flex align-items-center w-auto">
                    <img src="assets/img/udg.png" alt="">
                    <span class="d-none d-lg-block">PEEES-CUCEI</span>
                  </a>
                </div><!-- End Logo -->

                <div class="card mb-3 border border-5 border border-info">

                  <div class="card-body">

                    <div class="pt-4 pb-2">
                      <h5 class="card-title text-center pb-0 fs-4 fw-bold">Contactanos <img src="{{asset('assets/img/contactanos.png')}}" alt=""> </h5>
                      <p class="text-center small">Escribenos tus dudas especificas acerca del tramite</p>
                    </div>

                    <form class="row g-3 needs-validation" novalidate action="{{route('contactanos.store')}}" method="POST">
                      @csrf
                      <div class="col-12">
                          <label class="card-title fw-bold">Asunto</label>
                          <div class="input-group has-validation">
                              <select name="categoria"  value="{{old('categoria')}}" required id="inputState" class="form-select ps-5">
                                  <option value="" ></option>
                                  <option value="duda">Duda</option>
                                  <option value="comentario" >Comentario</option>
                                  <option value="reporte" >Reporte</option>
                                </select>
                                <div class="invalid-feedback">Por favor elige un asunto</div>
                                @error('categoria')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="mensaje" class="card-title fw-bold ">Mensaje</label>
                            <div class="input-group has-validation">
                                <textarea class="form-control" placeholder="Escribe tu comentario aquí" id="floatingTextarea" name="mensaje" required>{{old('mensaje')}}</textarea>
                            </div>
                            <div class="invalid-feedback">Por favor introduce un mensaje</div>
                            @error('mensaje')

                                <div class="alert alert-danger mt-1">{{$message}}</div>
                            @enderror
                      </div>

                      <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit">Contactar</button>
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
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<x-script></x-script>

</body>
</html>

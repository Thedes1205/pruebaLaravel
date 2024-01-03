<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <link href="{{asset('assets/img/udeg.png')}}" rel="icon">
        <title>formulario de contacto</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
    </head>

<body>
  <main id="main" class="main">
    <section class="section dashboard">
      <section class="section ms-4">
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                <div class="card mb-3">

                  <div class="card-body">

                    <div class="pt-4 pb-2">
                      <h5 class="card-title text-center pb-0 fs-4">Contactanos</h5>
                      <p class="text-center small">Escribemos tus dudas especificas acerca del tramite</p>
                    </div>
                    <strong>{{$subject}}</strong>
                    <h1>Correo electrónico de soporte</h1>
                    <p><strong>Nombre:</strong>{{$logueado->name}}</p>
                    <p><strong>Correo:</strong>{{$logueado->email}}</p>
                    <p><strong>Categoria:</strong>{{$contacto['categoria']}}</p>
                    <p><strong>Mensaje: </strong>{{$contacto['mensaje']}}</p>

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

</body>
</html>

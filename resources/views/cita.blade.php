<!DOCTYPE html>
<html lang="en">
    <head>

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
                      <h1 class="card-title text-center pb-0 fs-4">Correo de confirmacion de cita</h1>
                      <p class="text-center small">Hola {{$contacto['firstname'].' '.$contacto['lastname']}}!</p>
                    </div>
                    <p>El proceso de evaluacion del expediente correspondiente al numero de registro {{$contacto['registration_number']}} ha finalizado y este fue aprobado.</p>
                    <p>{{$contacto['message']}}</p>
                    <p><strong>Recuerda llevar tu expediente fisico!</strong></p>
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
</html>

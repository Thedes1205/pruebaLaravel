<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <link href="{{asset('assets/img/udeg.png')}}" rel="icon">
        <title>Perfil de usuario</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
        <x-header></x-header>
    </head>
    <x-navbar></x-navbar>
<body>
  <main id="main" class="main">

    <div class="pagetitle">
        <h1 class="fs-2 fw-bold">Perfil de usuario</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/inicio">Inicio</a></li>
            <li class="breadcrumb-item">Tramite</li>
            <li class="breadcrumb-item active">Perfil de usuario</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

      <section class="section profile">
        <div class="row">
          <div class="col-xl-4">

            <div class="card rounded-3 border border-5 border border-info">
              <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                <img src="{{asset('assets/img/process.png')}}" alt="Profile" class="rounded-circle">
                <h2 class="pagetitle fw-bold">Estatus de tramite</h2>
                <h3>Datos generales</h3>
                <div class="social-links mt-2">

                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div class="col-lg-9 col-md-8 mt-1 card-title fw-bold">Estatus</div>
                            @if (isset($registration->id) != null)
                                @if (isset($registration->file) == null)
                                <div class="col-lg-9 col-md-8">En espera</div>
                                @else
                                <div class="col-lg-9 col-md-8">{{$registration->file->status->status}}</div>
                                @endif
                            @else
                              <div class="col-lg-9 col-md-8">No hay tramite</div>
                              @endif
                              <div class="col-lg-9 col-md-8 card-title fw-bold">Mensaje</div>
                            @if (isset($registration->id) != null)
                                @if (isset($registration->file)==null)
                                <div class="col-lg-9 col-md-8">Se requiere subir expediente</div>
                                @else
                                <div class="col-lg-9 col-md-8">{{$registration->file->status->message}}</div>
                                @if (isset($registration->file->status->status)=='Con errores')
                                <br>
                                <a href="/status/{{$registration->file->status->id}}" class="btn btn-primary fw-bold ms-5 fs-5 text-white"><i class="bi bi-journal-text"></i> Ver errores</a>

                                @endif
                                @endif
                            @else
                              <div class="col-lg-9 col-md-8">No hay tramite</div>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>

          </div>

          <div class="col-xl-7">

            <div class="card rounded-3 border border-5 border border-info">
              <div class="card-body pt-3">
                <!-- Bordered Tabs -->

                <div class="tab-content pt-2">

                  <div class="tab-pane fade show active profile-overview" id="profile-overview">

                    <h5 class="card-title fs-2 ">Detalles de solicitud</h5>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label fw-bold">N° Registro</div>
                      <div class="col-lg-9 col-md-8">{{isset($registration)?$registration->registration_number:''}}</div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label fw-bold">Nombre</div>
                      <div class="col-lg-9 col-md-8">{{isset($registration)?$registration->name:''}}
                        {{-- {{isset($registration)?$registration->lastname:''}} --}}
                    </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label fw-bold">Correo</div>
                      <div class="col-lg-9 col-md-8">{{isset($registration)?$registration->user->email:''}}</div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label fw-bold">Carrera</div>
                      <div class="col-lg-9 col-md-8">{{isset($registration)?$registration->career:''}}</div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label fw-bold">Modalidad</div>
                      <div class="col-lg-9 col-md-8">{{isset($registration)?$registration->modality:''}}</div>
                    </div>

                  </div>

                </div><!-- End Bordered Tabs -->

              </div>
            </div>
            <!----------------------Action buttons edit/delete--------------------------------------------------->
            <div class="card rounded-3 border border-5 border border-info ">
              <div class="card-body profile-card pt-4 d-flex align-items-center  overflow-auto ">
                @if (isset($registration->id) != null)
                @if ($registration->file == null)
                  <button class="btn btn-success fw-bold fs-5 ms-1 text-white"><a href="{{route('registration.pdf')}}"target="_blank" class="text-white"><i class="bi bi-file-earmark-pdf"></i></i> PDF</button>

                  <button class="btn btn-primary fw-bold fs-5 ms-2 me-2"><a href="/registration/{{isset($registration)?$registration->id:''}}/edit" class="text-white"><i class="bi bi-pencil"></i> Editar</button>
                  <form action="/registration/{{isset($registration)?$registration->id:''}}" id="Borrar" method="POST" >
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger fw-bold fs-5 mt-1" onclick="detener(event);"><i class="bi bi-trash"></i> Eliminar</button>
                  </form>
                        <a href="/file/create" class="btn btn-warning fw-bold ms-2 fs-5 text-white"><i class="bi bi-arrow-up-circle"></i> Expediente</a>
                    @else
                    <form action="/file/{{isset($registration->file->id)?$registration->file->id:''}}" id="Borrarfile" method="POST" >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary fw-bold fs-5 mt-1 text-white" onclick="detenerfile(event);" ><i class="bi bi-pencil"></i> Actualizar expediente</button>
                      </form>
                    @endif
                  @else
                      <a href="/registration/create" class="btn btn-primary fw-bold ms-5 fs-5"><i class="bi bi-journal-text"></i> Crear solicitud</a>
                  @endif
              </div>
            </div>

          </div>
          <!------------------------------------------------------------------------------------------------->





        </div>
      </section>


  </main>
</body>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<x-script></x-script>
</html>

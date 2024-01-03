<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Expediente</title>
    <link href="{{asset('assets/img/udeg.png')}}" rel="icon">
    <x-header></x-header>
</head>
<x-navbar></x-navbar>
<body>
    <main id="main" class="main">
        <section class="section dashboard">
          <section class="section ms-4">
            <h1 class="fw-bold">Expediente</h1>
            <p>En esta sección podrás consultar detalles de los formatos que se te solicitan, en algunos casos liga spara generarlos y algunas recomendaciones.
                Nota: Recuerda que todos los formatos deben ser legibles y en PDF.
                Todos los documentos deben estar presentes en el archivo que subas, por lo que si te falta alguno será rechazado.</p>
            <a href="https://www.ilovepdf.com/merge_pdf" target="_blank" class="btn btn-primary mb-2 rounded-pill border border-4 border border-info fw-bold">Aquí puede acceder para unir todos los documentos en uno sólo</a><br>
            <div class="conteiner responsive border-primary border border-5 rounded-3 p-3">
                <div class="row">
                <div class="col-4">
                    <div class="card border border-info border border-5 rounded-3" style="width: 1fr;">
                        {{-- <img src="{{asset('assets/img/formSol.png')}}" class="card-img-top" alt="Formato-solicitud"> --}}
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Solicitud</h5>
                                <p class="card-text">Este es el formato de solicitud de tramite, recuerda generar el PDF desde esta plataforma y pegar una fotografía </p>
                                {{-- @if (Auth::user()->registration) --}}
                                <a href="/pdf" target="_blank">Descarga tu solicitud</a>
                                <br><br>
                                {{-- @endif --}}
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal1">
                                    <i class="bi bi-search"> Ver ejemplo</i>
                                  </button>
                            </div>
                    </div>
                </div>

            <!-- Modal -->
            <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Formato de solicitud</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" >
                        <img src="{{asset('assets/img/solicitud.jpg')}}"  alt="" style="width: 100%">
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
                </div>
            </div>
                <!--Fin modal-->

                <div class="col-4">
                    <div class="card border-info border border-5 rounded-3" style="width: 1fr;">
                        {{-- <img src="{{asset('assets/img/socioeco.png')}}" class="card-img-top" alt="Formato-solicitud"> --}}
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Cuestionario socioeconómico</h5>
                                <p class="card-text">Este consta de 3 páginas, recueda llenar todos los apartados que apliquen en tu caso</p>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal2">
                                    <i class="bi bi-search"> Ver ejemplo</i>
                                  </button>
                            </div>
                    </div>
                </div>

                  <!-- Modal -->
            <!-- Modal -->
            <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Estudio socioeconómico</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" >
                        <img src="{{asset('assets/img/socioeco1.jpg')}}"  alt="" style="width: 100%">
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
                </div>
            </div>
                <!--Fin modal-->

                <div class="col-4">
                    <div class="card border-info border border-5 rounded-3" style="width: 1fr;">
                        {{-- <img src="{{asset('assets/img/cartacom.png')}}" class="card-img-top" alt="carta-compromiso"> --}}
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Carta compromiso</h5>
                                <p class="card-text">Recuerda firmar manuscrito (no digital) y con tinta azul de preferencia, recuerda digitalizarlo en formato PDF</p>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal3">
                                    <i class="bi bi-search"> Ver ejemplo</i>
                                  </button>
                            </div>
                    </div>
                </div>
            <!-- Modal -->
            <div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Estudio socioeconómico</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" >
                        <img src="{{asset('assets/img/compromiso.jpg')}}"  alt="" style="width: 100%">
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
                </div>
            </div>
                <!--Fin modal-->

                <div class="col-4">
                    <div class="card border-info border border-5 rounded-3" style="width: 1fr;">
                        {{-- <img src="{{asset('assets/img/recomendado.png')}}" class="card-img-top" alt="Formato-solicitud"> --}}
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Carta de recomendación</h5>
                                <p class="card-text">Recuerda son 2 cartas y deben tener firma manustrita, recueda subirlas en formato PDF</p>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal4">
                                    <i class="bi bi-search"> Ver ejemplo</i>
                                  </button>
                            </div>
                    </div>
                </div>

           <!-- Modal -->
           <div class="modal fade" id="modal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Estudio socioeconómico</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" >
                            <img src="{{asset('assets/img/recomendacion.jpg')}}"  alt="" style="width: 100%">
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--Fin modal-->

                <div class="col-4">
                    <div class="card border-info border border-5 rounded-3" style="width: 1fr;">
                        {{-- <img src="{{asset('assets/img/nomina.png')}}" class="card-img-top" alt="Formato-solicitud"> --}}
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Comprobante de ingresos</h5>
                                <p class="card-text">Debe ser equivalente al mes, si es emitida por semana seran 4, si es por quincena serán 2 y si es mensual será 1</p>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal5"><i class="bi bi-search"> Ver ejemplo</i></button>
                            </div>
                    </div>
                </div>

                    <!-- Modal -->
                <div class="modal fade" id="modal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Estudio socioeconómico</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" >
                            <img src="{{asset('assets/img/nomina.png')}}"  alt="" style="width: 100%">
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                </div>
                <!--Fin modal-->

                <div class="col-4">
                    <div class="card border-info border border-5 rounded-3" style="width: 1fr;">
                        {{-- <img src="{{asset('assets/img/luz.png')}}" class="card-img-top" alt="Formato-solicitud"> --}}
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Comprobante de domicilio</h5>
                                <p class="card-text">Recibo de luz, teléfono, agua o de la misma recidencia. Copia de contrato de arrendamiento</p>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal6"><i class="bi bi-search"> Ver ejemplo</i></button>
                            </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="modal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Comprobate de domicilio</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" >
                            <img src="{{asset('assets/img/CFE.jpg')}}"  alt="" style="width: 70%" class="rounded mx-auto d-block" >
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                </div>
                <!--Fin modal-->

                <div class="col-4">
                    <div class="card border-info border border-5 rounded-3" style="width: 1fr;">
                        {{-- <img src="{{asset('assets/img/luz.png')}}" class="card-img-top" alt="Formato-solicitud"> --}}
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Kardex certificado</h5>
                                <p class="card-text">No se admiten constancias para becas, constancias con calificaciones, etc.</p>
                                <a href="http://escolar.cucei.udg.mx/cescolar/" target="_blank">Solicita tu Kardex certificado</a>
                                <br><br>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal7"><i class="bi bi-search"> Ver ejemplo</i></button>
                            </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="modal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Kardex certificado</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" >
                            <img src="{{asset('assets/img/kardex.png')}}"  alt="" style="width: 70%" class="rounded mx-auto d-block" >
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                </div>
                <!--Fin modal-->

                <div class="col-4">
                    <div class="card border-info border border-5 rounded-3" style="width: 1fr;">
                        {{-- <img src="{{asset('assets/img/sat.png')}}" class="card-img-top" alt="Formato-solicitud"> --}}
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Constancia de situación fiscal</h5>
                                <p class="card-text">Si ya estás dado de alta ante el SAT</p>
                                <a href="https://www.sat.gob.mx/aplicacion/53027/genera-tu-constancia-de-situacion-fiscal" target="_blank">Genera tu constancia</a>
                                <br><br>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal8"><i class="bi bi-search"> Ver ejemplo</i></button>
                            </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="modal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">SAT</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" >
                            <img src="{{asset('assets/img/SAT.jpg')}}"  alt="" style="width: 70%" class="rounded mx-auto d-block" >
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                </div>
                <!--Fin modal-->

                <div class="col-4">
                    <div class="card border-info border border-5 rounded-3" style="width: 1fr;">
                        {{-- <img src="{{asset('assets/img/curp.png')}}" class="card-img-top" alt="Formato-solicitud"> --}}
                            <div class="card-body">
                                <h5 class="card-title fw-bold">CURP</h5>
                                <p class="card-text">Con formato actualizado</p>
                                <a href="https://www.gob.mx/curp/" target="_blank">Genera tu CURP</a>
                                <br><br>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal9"><i class="bi bi-search"> Ver ejemplo</i></button>
                            </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="modal9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">CURP</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" >
                            <img src="{{asset('assets/img/CURP.jpg')}}"  alt="" style="width: 70%" class="rounded mx-auto d-block" >
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                </div>
                <!--Fin modal-->
                {{-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><div class="bi bi-arrow-up-short"></div></a> --}}
            </div>
        </div>
        <div class="card p-2 ms-3 border-info border border-5 mt-3 rounded-3" style="width: 50%">
            <form action="/file" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="m-3">
                    <label for="file" class="form-label">Sube tu expediente en PDF aquí</label>
                    <input class="form-control" type="file" id="file" name="file" required>
                    @error('file')
                    <div class="alert alert-danger">{{$message}}</div>
                    <br>
                    @enderror
                </div>
                    <input type="submit" value="Enviar" class="btn btn-primary fw-bold ms-3">
            </form>
        </div>
        </section>
        </section>
    </main>
</body>
<x-script></x-script>
</html>

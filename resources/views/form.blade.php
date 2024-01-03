<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <link href="{{asset('assets/img/udeg.png')}}" rel="icon">
        <title>formulario de tramite</title>
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
                      <img src="{{asset('assets/img/udg.png')}}" alt="">
                      <span class="d-none d-lg-block">PEEES-CUCEI</span>
                    </a>
                  </div><!-- End Logo -->

                  <div class="card mb-3">

                    <div class="card-body border border-info rounded-3 border border-5">


                      <h5 class="card-title text-center fw-bold fs-2"><img  class="text-left" src="{{asset('assets/img/solicitud.png')}}">Solicitud de tramite</h5>

                      <!-- General Form Elements -->
                      <form id="solicitud" Action="/registration" method="post" class="needs-validation" novalidate>
                        @csrf

                        <div class="row mb-3">
                          <label for="registration_number" class="col-sm-3 col-form-label">Nº Registro</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" required name="registration_number" id="registration_number"  value="{{old('registration_number')}}">
                            <div class="invalid-feedback">Por favor introduce un dato numerico</div>
                            @error('registration_number')
                            <div class="mt-2 alert alert-danger">{{$message}}</div>

                            @enderror
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="firstname" class="col-sm-3 col-form-label">Nombre(s)</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" required name="firstname" id="firstname"  value="{{old('firstname')}}">
                            <div class="invalid-feedback">Por favor introduce solo texto</div>
                            @error('firstname')
                            <div class="mt-2 alert alert-danger">{{$message}}</div>

                            @enderror
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="lastname" class="col-sm-3 col-form-label">Apellidos(s)</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" required name="lastname" id="lastname"  value="{{old('lastname')}}">
                            <div class="invalid-feedback">Por favor introduce un solo texto</div>
                            @error('lastname')
                            <div class="mt-2 alert alert-danger">{{$message}}</div>

                            @enderror
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="age" class="col-sm-3 col-form-label">Edad</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" required name="age" id="age"  value="{{old('age')}}" pattern="[0-9]{2}">
                            <div class="invalid-feedback">Por favor introduce un dato numerico no mayor a dos digitos</div>
                            @error('age')
                            <div class="mt-2 alert alert-danger">{{$message}}</div>

                            @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                          <label for="gpa" class="col-sm-3 col-form-label">Promedio</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" required name="gpa" id="gpa"  value="{{old('gpa')}}">
                            <div class="invalid-feedback">Por favor introduce un dato numerico con dos decimales</div>
                            @error('gpa')
                            <div class="mt-2 alert alert-danger">{{$message}}</div>

                            @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                          <label for="code" class="col-sm-3 col-form-label">Código</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" required name="code" id="code"  value="{{old('code')}}">
                            <div class="invalid-feedback">Por favor introduce un dato numerico de 9 digitos</div>
                            @error('code')
                            <div class="mt-2 alert alert-danger">{{$message}}</div>

                            @enderror
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="phone" class="col-sm-3 col-form-label">Teléfono</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" required name="phone" id="phone"  value="{{old('phone')}}" pattern="[0-9]{10}" title="Ingrese un número telefonico valido">
                            <div class="invalid-feedback">Por favor introduce un número de teléfono válido</div>
                            @error('phone')
                            <div class="mt-2 alert alert-danger">{{$message}}</div>

                            @enderror
                          </div>
                        </div>
                        <div class="row mb-2">
                          <label class="col-sm-3 col-form-label">Sexo</label>
                          <div class="col-sm-9">
                            <select class="form-select" id="gender" name="gender" aria-label="Default select example" value="{{old('gender')}}" required>
                              <option></option>
                              <option value="mujer" {{ old('gender') == 'mujer'? 'selected' : '' }}>Mujer</option>
                              <option value="hombre" {{ old('gender') == 'hombre'? 'selected' : '' }}>Hombre</option>
                            </select>
                            @error('gender')
                            <div class="mt-2 alert alert-danger">{{$message}}</div>

                            @enderror
                            <div class="invalid-feedback">Por favor seleccione una opción</div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="carrera" class="col-sm-3 col-form-label">Carrera</label>
                          <div class="col-sm-9">
                            <input type="text" name="career" id="career" class="form-control" value="{{old('career')}}" required>
                            <div class="invalid-feedback">Por favor introduce solo texto</div>
                            @error('career')
                            <div class="mt-2 alert alert-danger">{{$message}}</div>

                            @enderror
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="grado" class="col-sm-3 col-form-label">Grado</label>
                          <div class="col-sm-9">
                            <input type="number" name="grade" id="grade" class="form-control" value="{{old('grade')}}" required>
                            <div class="invalid-feedback">Por favor introduce un dato numerico no mayor a dos digitos</div>
                            @error('grade')
                            <div class="mt-2 alert alert-danger">{{$message}}</div>

                            @enderror
                          </div>
                        </div>
                        <div class="row mb-2">
                          <label class="col-sm-3 col-form-label" for="shift">Turno</label>
                          <div class="col-sm-9">
                            <select class="form-select" id="shift" name="shift" value="{{old('shift')}}" aria-label="Default select example" required>
                              <option></option>
                              <option value="matutino" {{ old('shift') == 'matutino' ? 'selected' : '' }}>Matutino</option>
                              <option value="vespertino" {{ old('shift')== 'vespertino'  ? 'selected' : '' }}>Vespertino</option>
                              <option value="mixto" {{ old('shift')== 'mixto' ? 'selected' : '' }}>Mixto</option>
                            </select>
                            <div class="invalid-feedback">Por favor seleccione una opción</div>
                            @error('shift')
                            <div class="mt-2 alert alert-danger">{{$message}}</div>

                            @enderror
                          </div>
                        </div>

                        <div class="row mb-2">
                          <label class="col-sm-3 col-form-label" for="school">Escuela</label>
                          <div class="col-sm-9">
                            <input type="text" name="school" id="school" class="form-control" value="CUCEI" readonly>
                          </div>
                          @error('school')
                            <div class="mt-2 alert alert-danger">{{$message}}</div>

                            @enderror
                        </div>
                        <div class="row mb-2">
                          <label class="col-sm-3 col-form-label" for="place">Lugar</label>
                          <div class="col-sm-9">
                            <input type="text" name="place" id="place" class="form-control" value="Guadalajara" readonly>
                          </div>
                          @error('place')
                            <div class="mt-2 alert alert-danger">{{$message}}</div>

                            @enderror
                        </div>
                        <div class="row mb-2">
                          <label class="col-sm-3 col-form-label" for="modality">Modalidad</label>
                          <div class="col-sm-9 has-validation">
                            <select class="form-select" id="modality" name="modality"  id="modality" aria-label="Default select example" required>
                              <option selected disabled class="info"></option>
                              <option value="Motivación a la investigación" {{ old('modality') == 'Motivación a la investigación' ? 'selected' : '' }}>Motivación a la investigación</option>
                              <option value="Formación de RH en el área de biblioteca" {{ old('modality') == 'Formación de RH en el área de biblioteca' ? 'selected' : '' }}>Formación de RH en el área de biblioteca</option>
                              <option value="Formación de RH en el área de Sistemas de información" {{ old('modality') == 'Formación de RH en el área de Sistemas de información' ? 'selected' : '' }}>Formación de RH en el área de Sistemas de información</option>
                              <option value="Deporte de alto rendimiento" {{ old('modality') == 'Deporte de alto rendimiento' ? 'selected' : '' }}>Deporte de alto rendimiento</option>
                              <option value="Bienestar estudiantil" {{ old('modality') == 'Bienestar estudiantil' ? 'selected' : '' }}>Bienestar estudiantil</option>
                              <option value="Protección civil" {{ old('modality') == 'Protección civil' ? 'selected' : '' }}>Protección civil</option>
                              <option value="Apoyo a las coordinaciones de carrera" {{ old('modality') == 'Apoyo a las coordinaciones de carrera' ? 'selected' : '' }}>Apoyo a las coordinaciones de carrera</option>

                            </select>
                            <div class="invalid-feedback">Por favor seleccione una opción</div>
                            @error('modality')
                            <div class="mt-2 alert alert-danger">{{$message}}</div>

                            @enderror
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="form-check">
                            <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                            <label class="form-check-label" for="acceptTerms">Acepto el <a href="/Aviso" target="_blank">aviso de privacidad</a></label>
                            <div class="invalid-feedback">Debes aceptar los terminos antes de enviar</div>
                          </div>
                        </div>
                        <div class="text-end pt-4 ">
                          <!--<label class="col-sm-2 col-form-label">Enviar</label>-->
                          <div class="col-sm-9">
                            <button type="submit" class="btn btn-primary fw-bold fs-5">Enviar</button>
                          </div>
                        </div>
                      </form><!-- End General Form Elements -->
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </section>
      </section>
      </section>
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><div class="bi bi-arrow-up-short"></div></a>
      <x-script></x-script>
    </main>
  </body>
</html>


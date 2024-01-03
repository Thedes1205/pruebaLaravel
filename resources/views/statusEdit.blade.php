<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Status</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta3/js/bootstrap-select.min.js"></script>
    <x-header></x-header>
</head>
<x-navbar></x-navbar>
<body>
    <main id="main" class="main">
        <section class="section dashboard">
          <section class="section ms-4">
            {{-- <h1>EXPEDIENTES</h1> --}}
            <div class="card mt-3"style="width: 100%">
            <div class="card-body mt-2">
            <h1>STATUS DEL EXPEDIENTE {{$status->file->registration->registration_number}}</h1>
            <form id="status" Action="/status/{{$status->id}}" method="post" class="needs-validation" novalidate>
                @csrf
                @method('PATCH')
                <div class="col-12">
                    <label for="status" class="card-title fw-bold">Status</label>
                    <div class="input-group has-validation">
                        <select name="status"  required id="status" class="form-select ps-5">
                            <option></option>
                            <option value="En revision"{{ old('status') == 'En revision' || $status->status == 'En revision' ? 'selected' : ''}} >En revision</option>
                            <option value="Con errores"{{ old('status') == 'Con errores' || $status->status == 'Con errores' ? 'selected' : ''}} >Con errores</option>
                            <option value="Todo bien"{{ old('status') == 'Todo bien' || $status->status == 'Todo bien' ? 'selected' : ''}} >Todo bien</option>
                            @error('status')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </select>
                        <div class="invalid-feedback">Por favor elige un status</div>
                    </div>
                </div>
                <div class="col-12">
                    <label for="message" class="card-title fw-bold ">Observaciones</label>
                    <div class="input-group has-validation">
                      <textarea class="form-control" placeholder="Escribe tus observaciones para el usuario aquí" id="floatingTextarea" name="message" required>{{old('message') ?? $status->message}}</textarea>
                      <div class="invalid-feedback">Por favor introduce un mensaje</div>
                    </div>
                  </div>
                  <br>
                  <h2>Errores</h2>
                  @foreach ($documentos as $document)

                  <div class="col-12">
                      <label for="{{$document->id}}[]" class="card-title fw-bold ">{{$document->name}}</label>
                      <div class="input-group has-validation">
                          <select name="{{$document->id}}[]" multiple required id="inputState" class="form-control selectpicker border rouded-3 ms-5">
                              <option></option>
                            @foreach ($errores as $error)
                            <option value="{{$error->id}}">{{$error->description}}</option>
                            @endforeach
                        </select>
                        @error('{{$document->name}}')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        {{-- <textarea class="form-control" placeholder="Escribe tus observaciones para el usuario aquí" id="floatingTextarea" name="message" required>{{old('message') ?? $status->message}}</textarea> --}}
                        <div class="invalid-feedback">Por favor selecciona por lo menos una opcion</div>
                    </div>
                </div>
                {{-- <br> --}}
                @endforeach
                <br>
                  <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary fw-bold fs-5"><i class="bi bi-pencil"></i> Guardar</button>
                  </div>

            </form>
            </div>
            </div>
          </section>
        </section>
    </main>
</body>
<x-script> </x-script>
</html>

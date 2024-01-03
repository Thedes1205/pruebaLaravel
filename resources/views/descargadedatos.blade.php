<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <x-header></x-header>
</head>
<x-navbar></x-navbar>
<body>
    <main id="main" class="main">
    <?php
    $anteriordocument = null
    ?>
    {{-- <div class="social-links mt-2"> --}}
        {{-- border-primary border border-5 rounded-3 p-3 --}}
    <div class="conteiner responsive ">
    <div class="row">
        @foreach($status->documents as $document)
            @if ($anteriordocument == null||$anteriordocument->name!=$document->name)
                    <div class="col-4">
                        <div style="height: 90%" class="card border border-info border border-5 rounded-3" style="width: 1fr;">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">{{$document->name}}</h5>
                                    @foreach($document->errors as $error)
                                    {{-- <div class="col-lg-9 col-md-8">{{$error->description}}</div> --}}
                                    <p class="card-text">{{$error->description}}</p>
                                    @endforeach
                                    <?php
                                    $anteriordocument = $document
                                    ?>
                                    {{-- <div class="col-lg-9 col-md-8 mt-1 card-title fw-bold">{{$document->name}}</div> --}}
                                    <br>
                                </div>
                        </div>
                    </div>
                {{-- <div class="card"  style="width: 50%;"> --}}
                    {{-- <div class="card-body"> --}}

                    {{-- </div> --}}
                {{-- </div> --}}
            @endif
        @endforeach
    </div>
    <a href="/registration/{{$status->file->registration->id}}" class="btn btn-primary fw-bold ms-5 fs-5 text-white"><i class='bx bx-arrow-back'></i> Regresar</a>
    </div>

    </main>
</body>
<x-script></x-script>
</html>

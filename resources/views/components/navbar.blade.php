  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/" class="logo d-flex align-items-center">
        <img src="{{asset('assets/img/udg.png')}}" alt="UDG">
        <span class="d-none d-lg-block m-3">PEEES UDG</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>

  </header><!-- End Header -->
<!-- ======= Sidebar ======= **************************************************************************-->
<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-item">
      <a class="nav-link " href="/">
        <i class="bi bi-grid"></i>
        <span>NavBar</span>
      </a>
    </li><!-- End Dashboard Nav -->
    @if (Route::has('login'))

    @auth
        @if (Gate::allows('administrador'))
        <div>
            <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-person"></i>
                <span>Usuario</span>
                <i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <form method="POST" action="{{route('logout')}}">
                  @csrf
                  <li>
                    <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault();this.closest('form').submit();">
                      <i class="bi bi-box-arrow-left fs-5"></i>
                    Cerrar sesión</a>
                  </li>
                </form>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i>
                <span>Trámite</span>
                <i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                  <a href="/file">
                    <i class="bi bi-file-earmark-pdf fs-5"></i><span>Revisar expedientes</span>
                  </a>
                </li>
                <li>
                    <a href="/registration">
                      <i class="bi bi-journal-text fs-5"></i><span>Revisar solicitudes</span>
                    </a>
                  </li>
              </ul>
            </li><!-- End Forms Nav -->
            <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-info-circle"></i>
                <span>Soporte</span>
                <i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                  <a href="{{route('contactanos.index')}}">
                    <i class="bi bi-envelope fs-5"></i><span>Contactanos</span>
                  </a>
                </li>
                <li>
                  <a href="{{route('question.index')}}">
                    <i class="bi bi-chat-left-text fs-5"></i><span>Foro</span>
                  </a>
                </li>
              </ul>
            </li>
          </div>
        @else
        <div>
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-person"></i>
            <span>Usuario</span>
            <i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <form method="POST" action="{{route('logout')}}">
              @csrf
              <li>
                <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault();this.closest('form').submit();">
                  <i class="bi bi-box-arrow-left fs-5"></i>
                Cerrar sesión</a>
              </li>
            </form>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-journal-text"></i>
            <span>Trámite</span>
            <i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            @if (Auth::user()->registration==null)
            <li>
              <a href="/registration/create">
                <i class="bi bi-journal-text fs-5"></i><span>Formulario de tramites</span>
              </a>
            </li>
            <li>
                <a href="/usuario">
                  <i class="bi bi-person fs-5"></i></i><span>Perfil del usuario</span>
                </a>
              </li>
            @else
            @if (Auth::user()->registration->file==null)
            <li>
              <a href="/registration/{{Auth::user()->registration->id}}/edit">
                <i class="bi bi-pencil fs-5"></i><span>Editar tramite</span>
              </a>
            </li>
            <li>
              <a href="/pdf" target="_blank">
                <i class="bi bi-file-earmark-pdf fs-5"></i><span>Generar PDF</span>
              </a>
            </li>
            <li>
              <a href="/file/create">
                <i class="bi bi-arrow-up-circle fs-5"></i><span>Subir expediente</span>
              </a>
            </li>
            <li>
              <a href="/registration/{{Auth::user()->registration->id}}">
                <i class="bi bi-person fs-5"></i></i><span>Perfil del usuario</span>
              </a>
            </li>
            @else
                <li>
                <a href="/registration/{{Auth::user()->registration->id}}">
                  <i class="bi bi-person fs-5"></i></i><span>Perfil del usuario</span>
                </a>
              </li>
            @endif
            @endif
          </ul>
        </li><!-- End Forms Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-info-circle"></i>
            <span>Soporte</span>
            <i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="{{route('contactanos.index')}}">
                <i class="bi bi-envelope fs-5"></i><span>Contactanos</span>
              </a>
            </li>
            <li>
              <a href="{{route('question.index')}}">
                <i class="bi bi-chat-left-text fs-5"></i><span>Foro</span>
              </a>
            </li>
          </ul>
        </li>
      </div>
        @endif
    @else
      <div>
        <li>
          <a class="nav-link mb-1" href="/login">
            <i class="bi bi-box-arrow-right"></i>
          Iniciar Sesion</a>
        </li>
        @if (Route::has('register'))
          <a class="nav-link" href="/register">
            <i class="bi bi-journal-text"></i>
          Registrar</a>
        @endif
        @endauth
      </div>
    @endif
  </ul>
</aside>

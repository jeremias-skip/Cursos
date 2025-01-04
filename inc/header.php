<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- Logo o Icono de la Empresa -->
            <a class="navbar-brand" href="#">
                <img src="https://via.placeholder.com/50" alt="Logo Empresa" class="d-inline-block align-text-top">

            </a>

            <!-- Botón de menú móvil -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Contenido del Navbar -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <!-- Menú desplegable -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="menuCursos" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Cursos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="menuCursos">
                            <li><a class="dropdown-item" href="#">Programación</a></li>
                            <li><a class="dropdown-item" href="#">Diseño</a></li>
                            <li><a class="dropdown-item" href="#">Marketing</a></li>
                        </ul>
                    </li>
                </ul>

                <!-- Barra de búsqueda -->
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar cursos" aria-label="Buscar">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>

                <!-- Otros enlaces o botones -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary" href="" data-bs-toggle="modal" data-bs-target="#loginModal">Iniciar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- modal para iniciar sesion -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <img src="https://via.placeholder.com/50" alt="Logo Empresa" class="d-inline-block align-text-top">
                <h5 class="modal-title" id="loginModalLabel">Iniciar Sesión</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" placeholder="nombre@ejemplo.com">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" placeholder="Contraseña">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
                </form>
            </div>
        </div>
    </div>
</div>
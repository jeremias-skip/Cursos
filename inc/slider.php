<div class="col-md-12"  id="container-slider">
    <div class="row">
        <div class="col-md-6">
            <div id="mainSlider" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container h-100 d-flex align-items-center">
                            <div class="row w-100 justify-content-center">
                                <div class="col-md-6 mb-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Curso 1">
                                            <div class="col-md-6 text-black">
                                                <h1 class="display-4 fw-bold">Cursos Online</h1>
                                                <p>Explora una variedad de cursos diseñados para ti.</p>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <a href="#" class="btn btn-success btn-rounded">Ver Cursos</a>
                                            <a href="#" class="btn btn-outline-primary btn-rounded" data-bs-toggle="modal" data-bs-target="#loginModal">Comprar Curso</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" id="container-slider">
                        <div class="container h-100 d-flex align-items-center">
                            <div class="row w-100 justify-content-center">
                                <div class="col-md-6 mb-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Curso 1">
                                            <div class="col-md-6 text-black">
                                                <h1 class="display-4 fw-bold">Cursos Online</h1>
                                                <p>Explora una variedad de cursos diseñados para ti.</p>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <a href="#" class="btn btn-success btn-rounded">Ver Cursos</a>
                                            <a href="#" class="btn btn-outline-primary btn-rounded" data-bs-toggle="modal" data-bs-target="#loginModal">Comprar Curso</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#mainSlider" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#mainSlider" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        </div>
            <div class="col-md-6">
            <?php include 'formulario.php'; ?>
            
        </div>
    </div>



    <!-- Modal para Iniciar Sesión -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
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

    <script src="./js/confirm_pass.js"></script>
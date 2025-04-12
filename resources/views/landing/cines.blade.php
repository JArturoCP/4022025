<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>CineStar ⭐ | Inicio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background-color: #1e3a8a;
            color: white;
            padding: 60px 0;
            border-radius: 0 0 30px 30px;
        }

        .movie-image {
            max-width: 43%;
            border-radius: 20px;
        }

        .carousel-control-prev,
        .carousel-control-next {
            filter: drop-shadow(0 0 5px #000);
            top: 100%;
            transform: translateY(-50%);
        }

        .carousel-controls-wrapper {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .card img {
            border-radius: 15px;
            object-fit: cover;
            height: 330px;
            width: 100%;
        }


        .badge {
            font-size: 0.75rem;
        }
    </style>
</head>

<body>

    <!-- barnav -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">🎬 CineStar ⭐</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Menú izquierdo -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Películas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Alimentos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Promos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Especiales</a></li>
                </ul>

        <!-- Menú derecho -->
        <form class="d-flex me-2">
          <select class="form-select me-2">
            <option selected>Perisur</option>
            <option>Centro</option>
            <option>Santa Fe</option>
            <option>Universidad</option>
            <option>Polanco</option>
          </select>
          <button class="btn btn-outline-light" type="submit">🔍</button>
        </form>
        <button class="btn btn-outline-light">👤</button>
      </div>
    </div>
  </nav>

 

    <!-- Sección  -->
    <div class="hero-section">
        <div class="container">
            <div class="row align-items-center">

                <!-- Imagen -->
                <div class="col-md-6 text-center mb-4 mb-md-0">
                    <img src="img/mine.jpg" alt="Poster" class="movie-image">
                    <p class="text-light mt-3">SOLO EN CINES</p>
                    <a href="#" class="btn btn-outline-light">COMPRAR TUS BOLETOS AQUÍ</a>
                </div>

                <!-- movimiento info -->
                <div class="col-md-6">
                    <div id="infoCarrusel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <h2>Duna: Parte Dos</h2>
                                <p>Paul Atreides une fuerzas con los Fremen en su camino hacia la venganza contra los conspiradores.</p>
                                <button class="btn btn-light">Adquirir entradas</button>
                            </div>
                            <div class="carousel-item">
                                <h2>Kung Fu Panda 4</h2>
                                <p>Po emprende una nueva aventura llena de acción, humor y sabiduría ancestral.</p>
                                <button class="btn btn-light">Adquirir entradas</button>
                            </div>
                            <div class="carousel-item">
                                <h2>Godzilla x Kong: The New Empire</h2>
                                <p>Los titanes se unen contra una amenaza colosal que cambiará todo lo que conocían.</p>
                                <button class="btn btn-light">Adquirir entradas</button>
                            </div>
                            <div class="carousel-item">
                                <h2>Ghostbusters: Apocalipsis Fantasma</h2>
                                <p>La nueva generación de Cazafantasmas enfrenta el mayor reto paranormal hasta ahora.</p>
                                <button class="btn btn-light">Adquirir entradas</button>
                            </div>
                        </div>

                        <div class="carousel-controls-wrapper">
                            <button class="carousel-control-prev position-static" type="button" data-bs-target="#infoCarrusel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </button>
                            <button class="carousel-control-next position-static" type="button" data-bs-target="#infoCarrusel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- cartelera -->
    <div class="container my-5">
        <h2 class="mb-4 text-center fw-bold">🎥 Cartelera</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4">

            <div class="col">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="img/blanca.jpeg" class="card-img-top" alt="Blanca Nieves">
                    <div class="card-body">
                        <span class="badge bg-success">A</span> 109 min
                        <span class="badge bg-primary float-end">Estreno</span>
                        <h6 class="mt-2 mb-1 fw-bold">Blanca Nieves</h6>
                        <a href="#" class="text-decoration-none text-primary small">Ver detalle</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="img/mine.jpg" class="card-img-top" alt="Minecraft">
                    <div class="card-body">
                        <span class="badge bg-secondary">TBC</span> 101 min
                        <span class="badge bg-info float-end">Preventa</span>
                        <h6 class="mt-2 mb-1 fw-bold">Una Película De Minecraft</h6>
                        <a href="#" class="text-decoration-none text-primary small">Ver detalle</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="img/rescate.jpg" class="card-img-top" alt="Rescate Implacable">
                    <div class="card-body">
                        <span class="badge bg-warning text-dark">B15</span> 116 min
                        <span class="badge bg-primary float-end">Estreno</span>
                        <h6 class="mt-2 mb-1 fw-bold">Rescate Implacable</h6>
                        <a href="#" class="text-decoration-none text-primary small">Ver detalle</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="img/memo.jpeg" class="card-img-top" alt="Memorias De Un Caracol">
                    <div class="card-body">
                        <span class="badge bg-warning text-dark">B</span> 95 min
                        <span class="badge bg-success float-end">Nominadas</span>
                        <h6 class="mt-2 mb-1 fw-bold">Memorias De Un Caracol</h6>
                        <a href="#" class="text-decoration-none text-primary small">Ver detalle</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="img/petter.jpeg" class="card-img-top" alt="Peter Pan">
                    <div class="card-body">
                        <span class="badge bg-warning text-dark">C</span> 89 min
                        <span class="badge bg-primary float-end">Estreno</span>
                        <h6 class="mt-2 mb-1 fw-bold">Peter Pan: Pesadilla En La Tierra Del Nunca Jamás</h6>
                        <a href="#" class="text-decoration-none text-primary small">Ver detalle</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="img/1938.jpg" class="card-img-top" alt="Blanca Nieves">
                    <div class="card-body">
                        <span class="badge bg-success">A</span> 100 min
                        <span class="badge bg-primary float-end">Estreno</span>
                        <h6 class="mt-2 mb-1 fw-bold">1938 Cuando El Petróleo Fue
                            Nuestro</h6>
                        <a href="#" class="text-decoration-none text-primary small">Ver detalle</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="img/cap.jpeg" class="card-img-top" alt="Peter Pan">
                    <div class="card-body">
                        <span class="badge bg-warning text-dark">B</span> 118 min
                        <span class="badge bg-primary float-end">Estreno</span>
                        <h6 class="mt-2 mb-1 fw-bold">Capitán América: Un Nuevo
                            Mundo</h6>
                        <a href="#" class="text-decoration-none text-primary small">Ver detalle</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="img/the.jpg" class="card-img-top" alt="Minecraft">
                    <div class="card-body">
                        <span class="badge bg-secondary">TBC</span> 125 min
                        <span class="badge bg-info float-end">Preventa</span>
                        <h6 class="mt-2 mb-1 fw-bold">The Chosen La Última Cena</h6>
                        <a href="#" class="text-decoration-none text-primary small">Ver detalle</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="img/perdida.jpg" class="card-img-top" alt="Peter Pan">
                    <div class="card-body">
                        <span class="badge bg-warning text-dark">B15</span> 98 min
                        <span class="badge bg-primary float-end">Estreno</span>
                        <h6 class="mt-2 mb-1 fw-bold">Pérdida Total</h6>
                        <a href="#" class="text-decoration-none text-primary small">Ver detalle</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="img/sofia.jpeg" class="card-img-top" alt="Peter Pan">
                    <div class="card-body">
                        <span class="badge bg-warning text-dark">B15</span> 106 min
                        <span class="badge bg-primary float-end">Estreno</span>
                        <h6 class="mt-2 mb-1 fw-bold">Qué Huevos, Sofía</h6>
                        <a href="#" class="text-decoration-none text-primary small">Ver detalle</a>
                    </div>
                </div>
            </div>

            <!-- menu trad. -->
            <div class="menu-section d-flex align-items-center" style="width: 100vw; height: 100vh; background: linear-gradient(to right, #ffffff 50%, #4c43cd 50%); border-radius: 30px;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 text-start px-5">
                            <h2 class="fw-bold text-dark">Menú Tradicional</h2>
                            <p class="text-secondary">
                                Disfruta de todos los alimentos y bebidas que tanto te encantan para vivir al máximo tu experiencia en nuestras salas.
                            </p>
                        </div>
                        <div class="col-md-6 text-center">
                            <img src="img/palomitas.jpg" alt="Palomitas" class="img-fluid" style="max-width: 60%; border-radius: 20px;">
                        </div>
                    </div>
                </div>
            </div>

            <!-- vip -->
            <div class="vip-section d-flex align-items-center" style="width: 100vw; height: 100vh; background: linear-gradient(to right, #4c43cd 50%, #ffffff 50%); border-radius: 30px;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 text-center">
                            <img src="img/salas.jpeg" alt="Salas VIP" class="img-fluid" style="max-width: 60%; border-radius: 20px;">
                        </div>
                        <div class="col-md-6 text-start px-5">
                            <h2 class="fw-bold text-dark">Experiencia VIP</h2>
                            <p class="text-dark">
                                Disfruta del máximo confort en nuestras salas VIP, con asientos reclinables, servicio a la carta y una experiencia cinematográfica de primer nivel.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ultima barra -->
    <footer class="bg-dark text-white text-center py-3">
        © 2025 CineGlobal | Todos los derechos reservados.
    </footer>

    <footer class="bg-dark text-white text-center py-3">
        Terminos y condiciones | Aviso de privacidad
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
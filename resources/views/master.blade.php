<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connection Father</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<section>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h1>CFather</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            Home
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Pacientes</a></li>
                            <li><a class="dropdown-item" href="#">Colaboradores</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Gestão</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</section>

<section>
    <main class="container py-5">
        <h2 class="pb-2 border-bottom">Proximos Agendamentos</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="feature col">
                <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                    <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"></use></svg>
                </div>
                <h3 class="fs-2 text-body-emphasis">Featured title</h3>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                <a href="#" class="icon-link">
                    Call to action
                    <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
                </a>
            </div>
            <div class="feature col">
                <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                    <svg class="bi" width="1em" height="1em"><use xlink:href="#people-circle"></use></svg>
                </div>
                <h3 class="fs-2 text-body-emphasis">Featured title</h3>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                <a href="#" class="icon-link">
                    Call to action
                    <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
                </a>
            </div>
            <div class="feature col">
                <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                    <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"></use></svg>
                </div>
                <h3 class="fs-2 text-body-emphasis">Featured title</h3>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                <a href="#" class="icon-link">
                    Call to action
                    <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
                </a>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="bg-body-tertiary p-5 rounded">
            <h1>Agendamento e gestão, tudo em um unico lugar...</h1>
            <p class="lead">Um lugar onde você pode fazer a gestão dos pacientes que fazem dialises.</p>
            <a class="btn btn-md btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" role="button">Novo Agendamento</a>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Recipient:</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Message:</label>
                                <textarea class="form-control" id="message-text"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</section>

<section class="container py-5">
    <div class="row g-2">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Agendamentos Realizados</h6>
                    <p class="card-text"><strong><span>345</span></strong></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">N° de Atendimentos Realizados</h6>
                    <p class="card-text"><strong><span>247</span></strong></p>
                </div>
            </div>
        </div>
        <div class="col ">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">N° de Atendimentos Agendados</h6>
                    <p class="card-text"><strong><span>247</span></strong></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">N° de Atendimentos Finalizados</h6>
                    <p class="card-text"><strong><span>247</span></strong></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container">
    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pacientes</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Colaboradores</a></li>
        </ul>
        <p class="text-center text-body-secondary">© 2025 CFather</p>
    </footer>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FullCalendar CSS -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        #calendar {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card {
            border-radius: 12px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        .fc-list-event-title {
            font-weight: bold;
            color: #0d6efd;
        }

        .fc-list-day-cushion {
            background: #f1f3f5;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="">
    <!-- NAVBAR -->
    <header class="container mt-3">
        <nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Thirteenth navbar example">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false"
                        aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11"><a
                        class="navbar-brand col-lg-3 me-0" href="#">Centered nav</a>
                    <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">
                                <span><i class="bi bi-house-door"></i></span>
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                <span><i class="bi bi-person-badge-fill"></i></span>
                                <span>Pacientes</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/pacientes">Todos Pacientes</a></li>
                                <li><a class="dropdown-item" href="#">Endereços dos Pacientes</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                <span><i class="bi bi-people-fill"></i></span>
                                <span>Colaboradores</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/colaboradores">Todos Colaboradores</a></li>
                                <li><a class="dropdown-item" href="#">Endereços dos Colaboradores</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="d-lg-flex col-lg-3 justify-content-lg-end">
                        <button class="btn btn-primary">Agendamento</button>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mt-4">

        <section class="bg-white p-4">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="fw-bold">Colaboradores</h3>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <button class="btn btn-primary">Novo</button>
                </div>
            </div>

        </section>

        <section class="bg-white p-4">
            <div class="card mb-3">
                <div class="card-body">
                    <form action="#" method="GET">
                        <div class="row align-items-end g-3">
                            <div class="col-md-3">
                                <label class="form-label">Busca</label>
                                <input type="text" class="form-control" name="search" value=""
                                       placeholder="Nome, email ou telefone">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Estado</label>
                                <select name="state" class="form-select">
                                    <option value="">Todos</option>
                                    <option value="AC">
                                        Acre
                                    </option>
                                    <option value="AL">
                                        Alagoas
                                    </option>
                                    <option value="AP">
                                        Amapá
                                    </option>
                                    <option value="AM">
                                        Amazonas
                                    </option>
                                    <option value="BA">
                                        Bahia
                                    </option>
                                    <option value="CE">
                                        Ceará
                                    </option>
                                    <option value="DF">
                                        Distrito Federal
                                    </option>
                                    <option value="ES">
                                        Espírito Santo
                                    </option>
                                    <option value="GO">
                                        Goiás
                                    </option>
                                    <option value="MA">
                                        Maranhão
                                    </option>
                                    <option value="MT">
                                        Mato Grosso
                                    </option>
                                    <option value="MS">
                                        Mato Grosso do Sul
                                    </option>
                                    <option value="MG">
                                        Minas Gerais
                                    </option>
                                    <option value="PA">
                                        Pará
                                    </option>
                                    <option value="PB">
                                        Paraíba
                                    </option>
                                    <option value="PR">
                                        Paraná
                                    </option>
                                    <option value="PE">
                                        Pernambuco
                                    </option>
                                    <option value="PI">
                                        Piauí
                                    </option>
                                    <option value="RJ">
                                        Rio de Janeiro
                                    </option>
                                    <option value="RN">
                                        Rio Grande do Norte
                                    </option>
                                    <option value="RS">
                                        Rio Grande do Sul
                                    </option>
                                    <option value="RO">
                                        Rondônia
                                    </option>
                                    <option value="RR">
                                        Roraima
                                    </option>
                                    <option value="SC">
                                        Santa Catarina
                                    </option>
                                    <option value="SP">
                                        São Paulo
                                    </option>
                                    <option value="SE">
                                        Sergipe
                                    </option>
                                    <option value="TO">
                                        Tocantins
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Cidade</label>
                                <input type="text" class="form-control" name="city" value="" placeholder="Cidade">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Bairro</label>
                                <input type="text" class="form-control" name="district" value="" placeholder="Bairro">
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search"
                                         width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                         stroke="currentColor" fill="none" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                                        <path d="M21 21l-6 -6"></path>
                                    </svg>
                                    Filtrar
                                </button>
                            </div>
                            <div class="col-md-2">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section class="bg-white p-4">
            <div class="card p-3">
                <table class="table card-table table-vcenter text-nowrap">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Contato</th>
                        <th>Localização</th>
                        <th>Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="avatar me-2" style="background-image: url(/images/user.png)"></span>
                                <div>
                                    <div>Jose Fulano</div>
                                    <div class="text-muted">meuemail@meuemail.com.br</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href="#" target="_blank" title="Abrir WhatsApp" class="text-decoration-none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                     stroke-linejoin="round"
                                     class="icon icon-tabler icons-tabler-outline icon-tabler-brand-whatsapp">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9"></path>
                                    <path
                                        d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1"></path>
                                </svg>
                                (11) 1111-1111
                            </a>
                        </td>
                        <td>
                            <div>São Paulo</div>
                            <div class="text-muted">Itaquaquecetuba</div>
                        </td>
                        <td class="text-center">
                            <a href="#" class="btn btn-primary btn-sm">Detalhes</a>
                        </td>
                    </tr>
                    </tbody>

                </table>
            </div>

        </section>

    </main>

    <!-- MODAL -->
    <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eventModalLabel">Detalhes do Paciente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Nome:</strong> <span id="modalPatientName"></span></p>
                    <p><strong>Data:</strong> <span id="modalDate"></span></p>
                    <p><strong>Observação:</strong> <span id="modalNote"></span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SCRIPTS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</body>
</html>

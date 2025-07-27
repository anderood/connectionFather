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
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .card {
            border-radius: 12px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
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
            <h1 class="fw-bold">Seja bem-vindo, Fulano 👋</h1>
            <p class="text-muted">Aqui está o resumo do seu painel de controle.</p>
        </section>

        <section class="bg-white p-4">
            <h2 class="h4 px-1">📅 Próximos eventos</h2>
            <ul id="eventList" class="list-group"></ul>
        </section>

        <section class="bg-white p-4">
            <h2 class="h4 px-1">📆 Calendário</h2>
            <div id="calendar"></div>
        </section>

        <section class="bg-white p-4">
            <h2 class="h4 px-1">📊 Resumo</h2>
            <div class="row gap-3 d-flex justify-content-center mt-4">
                <article class="card text-center p-3" style="width: 11rem;">
                    <i class="bi bi-check2-circle fs-1 text-success"></i>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">1000</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Completos</h6>
                    </div>
                </article>

                <article class="card text-center p-3" style="width: 11rem;">
                    <i class="bi bi-calendar-event fs-1 text-primary"></i>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">1000</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Agendados</h6>
                    </div>
                </article>

                <article class="card text-center p-3" style="width: 11rem;">
                    <i class="bi bi-person fs-1 text-warning"></i>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">1</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Paciente</h6>
                    </div>
                </article>

                <article class="card text-center p-3" style="width: 11rem;">
                    <i class="bi bi-people fs-1 text-info"></i>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">4</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Colaboradores</h6>
                    </div>
                </article>
            </div>
        </section>

        <section class="bg-white p-4">
            <h2 class="h4 px-1">📈 Gráfico</h2>
            <canvas id="myChart"></canvas>
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        // ✅ Criação do calendário
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            locale: 'pt-br',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,listWeek'
            },
            events: [
                { title: 'Consulta João Silva', start: '2025-07-10', extendedProps: { paciente: 'João Silva', observacao: 'Revisão anual' } },
                { title: 'Consulta João Silva', start: '2025-07-26', extendedProps: { paciente: 'João Silva', observacao: 'Revisão anual' } },
                { title: 'Consulta João Silva', start: '2025-07-27', extendedProps: { paciente: 'João Silva', observacao: 'Revisão anual' } },
                { title: 'Consulta Maria Souza', start: '2025-07-26', extendedProps: { paciente: 'Maria Souza', observacao: 'Retorno pós-operatório' } },
                { title: 'Consulta Jose Souza', start: '2025-07-28', extendedProps: { paciente: 'Jose Souza', observacao: 'Retorno pós-operatório' } },
                { title: 'Consulta Jose Souza', start: '2025-07-29', extendedProps: { paciente: 'Jose Souza', observacao: 'Retorno pós-operatório' } },
                { title: 'Consulta Jose Souza', start: '2025-07-30', extendedProps: { paciente: 'Jose Souza', observacao: 'Retorno pós-operatório' } }
            ],
            eventClick: function(info) {
                // 👉 Modal ao clicar no calendário
                document.getElementById('modalPatientName').textContent = info.event.extendedProps.paciente;
                document.getElementById('modalDate').textContent = info.event.start.toLocaleDateString();
                document.getElementById('modalNote').textContent = info.event.extendedProps.observacao;

                var myModal = new bootstrap.Modal(document.getElementById('eventModal'));
                myModal.show();
            },
            windowResize: function() {
                if (window.innerWidth < 768) {
                    calendar.changeView('listWeek');
                } else {
                    calendar.changeView('dayGridMonth');
                }
            }
        });

        // Renderiza o calendário
        calendar.render();
        if (window.innerWidth < 768) {
            calendar.changeView('listWeek');
        }

        // ✅ Lista de próximos eventos
        const allEvents = calendar.getEvents();
        const futureEvents = allEvents
            .filter(event => event.start >= new Date()) // só eventos futuros
            .sort((a, b) => a.start - b.start)          // ordena
            .slice(0, 5);                               // só os 5 primeiros

        const eventList = document.getElementById('eventList');
        futureEvents.forEach(ev => {
            const li = document.createElement('li');
            li.className = 'list-group-item d-flex justify-content-between align-items-center';
            li.style.cursor = 'pointer';
            li.innerHTML = `
                <span><i class="bi bi-calendar-event"></i> ${ev.title}</span>
                <span class="badge bg-primary rounded-pill">
                    ${ev.start.toLocaleDateString('pt-BR', { day: '2-digit', month: '2-digit' })}
                </span>
            `;

            // 👉 Clique no item da lista também abre o modal
            li.addEventListener('click', () => {
                document.getElementById('modalPatientName').textContent = ev.extendedProps?.paciente || 'Não informado';
                document.getElementById('modalDate').textContent = ev.start.toLocaleDateString();
                document.getElementById('modalNote').textContent = ev.extendedProps?.observacao || 'Sem observação';

                var myModal = new bootstrap.Modal(document.getElementById('eventModal'));
                myModal.show();
            });

            eventList.appendChild(li);
        });
    });

    // ✅ Gráfico Chart.js (sem alterações)
    const ctx = document.getElementById('myChart');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# de Votos',
                data: [12, 19, 3, 5, 2, 3],
                borderWidth: 1,
                backgroundColor: 'rgba(54, 162, 235, 0.5)'
            }]
        },
        options: { scales: { y: { beginAtZero: true } } }
    });
</script>

</body>
</html>

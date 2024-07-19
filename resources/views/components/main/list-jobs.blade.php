<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            locale: 'pt-BR',
            dayHeaderContent: function(arg) {
                return arg.text.replace('.', ''); // Remove the period from day names
            },
            buttonText: {
                today: "Hoje"
            },
            headerToolbar: {
                start: 'title',
                end: 'today',
            },
            footerToolbar: {
                start: 'prev',
                title: 'weekDay',
                end: 'next'
            },
            height: 420,
            initialView: 'dayGridMonth',
            events: "/dashboard/events/",
            eventClick: function(info) {
                // Prevent the default action (navigating to the URL)
                info.jsEvent.preventDefault();

                // Update the card with event details
                var card = document.getElementById('eventCard');
                var cardTitle = document.querySelector('.card-title');
                var cardDate = document.querySelector('.card-body p');

                cardTitle.textContent = 'Nome: ' + info.event.title;
                cardDate.textContent = 'Data: ' + info.event.start.toLocaleDateString('pt-BR', {
                    year: 'numeric',
                    month: '2-digit',
                    day: '2-digit'
                });

                // Show the card
                card.style.display = 'block';
            }
        });
        calendar.render();
    });
</script>

<div class="container mt-3">
    <div id="calendar"></div>
    <div id="eventCard" class="card mt-3" style="display: none;">
        <div class="card-body">
            <div class="card-title text-center"></div>
            <p class="text-center"> </p>
        </div>
    </div>
</div>

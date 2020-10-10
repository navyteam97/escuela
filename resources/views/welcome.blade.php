@extends('layouts.app')

@section('contenido')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <a href="https://unsplash.it/1200/768.jpg?image=251" data-toggle="lightbox">
                            <img src="https://unsplash.it/600.jpg?image=251" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-body p-0">
                        <!-- THE CALENDAR -->
                        <div id="calendar"></div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <div class="card-title">
                            FilterizR Gallery with Ekko Lightbox
                        </div>
                    </div>
                    <div class="card-body">
                        <div>
                            <div class="btn-group w-100 mb-2">
                                <a class="btn btn-info active" href="javascript:void(0)" data-filter="all"> All items
                                </a>
                                <a class="btn btn-info" href="javascript:void(0)" data-filter="1"> Category 1 (WHITE)
                                </a>
                                <a class="btn btn-info" href="javascript:void(0)" data-filter="2"> Category 2 (BLACK)
                                </a>
                                <a class="btn btn-info" href="javascript:void(0)" data-filter="3"> Category 3 (COLORED)
                                </a>
                            </div>
                            <div class="mb-2">
                                <a class="btn btn-secondary" href="javascript:void(0)" data-shuffle> Shuffle items </a>
                                <div class="float-right">
                                    <select class="custom-select" style="width: auto;" data-sortOrder>
                                        <option value="index"> Sort by Position </option>
                                        <option value="sortData"> Sort by Custom Data </option>
                                    </select>
                                    <div class="btn-group">
                                        <a class="btn btn-default" href="javascript:void(0)" data-sortAsc> Ascending
                                        </a>
                                        <a class="btn btn-default" href="javascript:void(0)" data-sortDesc> Descending
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="filter-container p-0 row">
                                <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                                    <a href="https://via.placeholder.com/1200/FFFFFF.png?text=1" data-toggle="lightbox"
                                        data-title="sample 1 - white">
                                        <img src="https://via.placeholder.com/300/FFFFFF?text=1" class="img-fluid mb-2"
                                            alt="white sample" />
                                    </a>
                                </div>
                                <div class="filtr-item col-sm-2" data-category="2" data-sort="black sample">
                                    <a href="https://via.placeholder.com/1200/000000.png?text=2" data-toggle="lightbox"
                                        data-title="sample 2 - black">
                                        <img src="https://via.placeholder.com/300/000000?text=2" class="img-fluid mb-2"
                                            alt="black sample" />
                                    </a>
                                </div>
                                <div class="filtr-item col-sm-2" data-category="3" data-sort="red sample">
                                    <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=3"
                                        data-toggle="lightbox" data-title="sample 3 - red">
                                        <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=3"
                                            class="img-fluid mb-2" alt="red sample" />
                                    </a>
                                </div>
                                <div class="filtr-item col-sm-2" data-category="4" data-sort="red sample">
                                    <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=4"
                                        data-toggle="lightbox" data-title="sample 4 - red">
                                        <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=4"
                                            class="img-fluid mb-2" alt="red sample" />
                                    </a>
                                </div>
                                <div class="filtr-item col-sm-2" data-category="5" data-sort="black sample">
                                    <a href="https://via.placeholder.com/1200/000000.png?text=5" data-toggle="lightbox"
                                        data-title="sample 5 - black">
                                        <img src="https://via.placeholder.com/300/000000?text=5" class="img-fluid mb-2"
                                            alt="black sample" />
                                    </a>
                                </div>
                                <div class="filtr-item col-sm-2" data-category="6" data-sort="white sample">
                                    <a href="https://via.placeholder.com/1200/FFFFFF.png?text=6" data-toggle="lightbox"
                                        data-title="sample 6 - white">
                                        <img src="https://via.placeholder.com/300/FFFFFF?text=6" class="img-fluid mb-2"
                                            alt="white sample" />
                                    </a>
                                </div>
                                <div class="filtr-item col-sm-2" data-category="7" data-sort="white sample">
                                    <a href="https://via.placeholder.com/1200/FFFFFF.png?text=7" data-toggle="lightbox"
                                        data-title="sample 7 - white">
                                        <img src="https://via.placeholder.com/300/FFFFFF?text=7" class="img-fluid mb-2"
                                            alt="white sample" />
                                    </a>
                                </div>
                                <div class="filtr-item col-sm-2" data-category="8" data-sort="black sample">
                                    <a href="https://via.placeholder.com/1200/000000.png?text=8" data-toggle="lightbox"
                                        data-title="sample 8 - black">
                                        <img src="https://via.placeholder.com/300/000000?text=8" class="img-fluid mb-2"
                                            alt="black sample" />
                                    </a>
                                </div>
                                <div class="filtr-item col-sm-2" data-category="9" data-sort="red sample">
                                    <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=9"
                                        data-toggle="lightbox" data-title="sample 9 - red">
                                        <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=9"
                                            class="img-fluid mb-2" alt="red sample" />
                                    </a>
                                </div>
                                <div class="filtr-item col-sm-2" data-category="10" data-sort="white sample">
                                    <a href="https://via.placeholder.com/1200/FFFFFF.png?text=10" data-toggle="lightbox"
                                        data-title="sample 10 - white">
                                        <img src="https://via.placeholder.com/300/FFFFFF?text=10" class="img-fluid mb-2"
                                            alt="white sample" />
                                    </a>
                                </div>
                                <div class="filtr-item col-sm-2" data-category="11" data-sort="white sample">
                                    <a href="https://via.placeholder.com/1200/FFFFFF.png?text=11" data-toggle="lightbox"
                                        data-title="sample 11 - white">
                                        <img src="https://via.placeholder.com/300/FFFFFF?text=11" class="img-fluid mb-2"
                                            alt="white sample" />
                                    </a>
                                </div>
                                <div class="filtr-item col-sm-2" data-category="12" data-sort="black sample">
                                    <a href="https://via.placeholder.com/1200/000000.png?text=12" data-toggle="lightbox"
                                        data-title="sample 12 - black">
                                        <img src="https://via.placeholder.com/300/000000?text=12" class="img-fluid mb-2"
                                            alt="black sample" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <ul>
                            <!-- For filtering controls add -->
                            <li data-filter="all"> All items </li>
                            <li data-filter="1"> Category 1 </li>
                            <li data-filter="2"> Category 2 </li>
                            <li data-filter="3"> Category 3 </li>
                            <!-- For a shuffle control add -->
                            <li data-shuffle> Shuffle items </li>
                            <!-- For sorting controls add -->
                            <li data-sortAsc> Ascending </li>
                            <li data-sortDesc> Descending </li>
                        </ul>
                        <!-- To choose the value by which you want to sort add -->
                        <select data-sortOrder>
                            <option value="index"> Position </option>
                            <option value="sortData"> Custom Data </option>
                        </select>
                        <!-- To create a search control -->
                        <input type="text" name="filtr-search" value="" placeholder="Your search" data-search="">
                    </div>
                    <div class="card-body">
                        <div class="filter-container">
                            <div class="filtr-item" data-category="1" data-sort="value">
                                <img src="https://biblioteca.acropolis.org/wp-content/uploads/2015/08/1.png" alt="sample" />
                            </div>
                            <div class="filtr-item" data-category="2, 1" data-sort="value">
                                <img src="https://biblioteca.acropolis.org/wp-content/uploads/2015/08/2.png" alt="sample" />
                            </div>
                            <div class="filtr-item" data-category="1, 3" data-sort="value">
                                <img src="https://biblioteca.acropolis.org/wp-content/uploads/2015/08/3.png" alt="sample" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
<script>
// Test para comprobar funcionamiento sweetalert
/* Swal.fire({
    title: 'Error!',
    text: 'Do you want to continue',
    icon: 'error',
    confirmButtonText: 'Cool'
}); */

// Test para comprobar funcionamiento de fullCalendar
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        initialDate: '2020-09-07',
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        events: [{
                title: 'All Day Event',
                start: '2020-09-01',
                backgroundColor: '#f56954', //red
                borderColor: '#f56954' //red
            },
            {
                title: 'Long Event',
                start: '2020-09-07',
                end: '2020-09-10'
            },
            {
                groupId: '999',
                title: 'Repeating Event',
                start: '2020-09-09T16:00:00'
            },
            {
                groupId: '999',
                title: 'Repeating Event',
                start: '2020-09-16T16:00:00'
            },
            {
                title: 'Conference',
                start: '2020-09-11',
                end: '2020-09-13'
            },
            {
                title: 'Meeting',
                start: '2020-09-12T10:30:00',
                end: '2020-09-12T12:30:00'
            },
            {
                title: 'Lunch',
                start: '2020-09-12T12:00:00'
            },
            {
                title: 'Meeting',
                start: '2020-09-12T14:30:00'
            },
            {
                title: 'Birthday Party',
                start: '2020-09-13T07:00:00'
            },
            {
                title: 'Click for Google',
                url: 'http://google.com/',
                start: '2020-09-28'
            }
        ]
    });

    calendar.render();
});

//Test de ekko-light
/* $(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
}); */

//Test de ekko-light acomodando cajas con filterizr
/* $(function() { */
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
            alwaysShowClose: true
        });
    });

    $('.filter-container').filterizr({
        gutterPixels: 3
    });
    $('.btn[data-filter]').on('click', function() {
        $('.btn[data-filter]').removeClass('active');
        $(this).addClass('active');
    });
/* }) */
</script>
@endsection
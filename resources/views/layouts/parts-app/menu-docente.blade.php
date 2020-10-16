<nav class="navbar navbar-light bg-dark">
    <a class="navbar-brand">Sección Docente</a>
    <ul class="nav justify-content-right">
        <li>
            <a class="nav-link text-white"><b>Ciclo Lectivo:</b></a>
        </li>
        <li>

            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1"
                tabindex="-1" aria-hidden="true">

                @foreach($ciclos_lectivos as $yoko)
                <option value="{{ $yoko->id  }}" data-select2-id="30">{{ $yoko->name  }}</option>
                @endforeach
            </select>
        </li>
    </ul>
</nav>
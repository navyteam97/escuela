<div class="card bg-gradient-success collapsed-card">
    <div class="card-header">
        <h3 class="card-title">Agregar</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('user.store')}}" role="form" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" name="name" required placeholder="Escriba aquí por favor">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" required placeholder="ejemplo@ejemplo.com">
            </div>
            <div class="form-group">
                <label for="name">Contraseña</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-block bg-gradient-secondary"><strong>Guardar</strong></button>
            </div>
        </form>
    </div>
</div>
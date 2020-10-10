<div class="card bg-gradient-maroon collapsed-card">
    <div class="card-header">
        <h3 class="card-title">Observar</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <div class="card-tools">
            @include('pages.user.search')
        </div>
    
        <form action="#" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="form-control-label" for="name">Nombre</label>
                <input type="text" class="form-control" name="name" value="">
            </div>
            <div class="form-group">
                <label class="form-control-label" for="email">E-mail</label>
                <input type="email" name="email" class="form-control" value="">
            </div>
            <div class="form-group">
                <label class="form-control-label" for="password">Contraseña</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-block bg-gradient-secondary"><strong>Actualizar</strong></button>
            </div>
        </form>
        
    </div>
</div>
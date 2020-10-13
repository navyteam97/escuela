<div id="userModal" class="modal">
    <div class="modal-dialog modal-lg" role="document">
        <form method="post" id="save-modify-form" class="form-horizontal" role="form">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 id="modal-title">Editar&nbsp;</h4>
                </div>

                <input id="id" type="number" name="id">
                <div class="form-group">
                    <label class="form-control-label" for="name">Nombre</label>
                    <input id="name" type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="email">E-mail</label>
                    <input id="email" type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="password">Contraseña</label>
                    <input type="password" class="form-control" name="password">
                </div>
            </div> <!-- FIN Modal body -->
            <div class="modal-footer">
                <button type="submit" class="btn btn-block bg-gradient-secondary"><strong>Actualizar</strong></button>
            </div>
        </form>
    </div>
</div> <!-- FIN Formulario de Alta/ Modificacion -->
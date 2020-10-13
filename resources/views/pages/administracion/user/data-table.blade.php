<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista</h3>
        </div>
        <div class="card-body">
            <table id="userTable" class="display cell-border">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>E-mail</th>
                        <th>Editar</th>
                        <th>Observar</th>
                        <th>Eliminar</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>
                            <button onclick="edit({{ $item }})" class="btn btn-sm btn-primary">Editar</button>
                        </td>
                        <td>
                            <form action="{{ route('user.show', $item->id) }}" method="get">
                                <button class="btn btn-sm btn-dark">Ver</button>
                            </form>
                        </td>
                        <td>
                            <button onclick="eliminar({{ $item }})" class="btn btn-sm btn-danger">Eliminar</button>
                        </td>
                        <td>
                            <form action="{{ route('user-status', $item->id) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-success">Activo</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
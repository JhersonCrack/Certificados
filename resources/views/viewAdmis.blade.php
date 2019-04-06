@extends ('plantilla')
@section('seccion')
    <div class="container my-4" id="app">
        <example-component></example-component>
        <h1 class="display-4">Cursos Realizados</h1>
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Id_administrador</th>
                <th scope="col">Nombre</th>
                <th scope="col">Cuenta</th>
                <th scope="col">Contraseña</th>
            </tr>
            </thead>
            <tbody>
            @foreach($administradores as $item)
                <tr>
                    <td scope="row">{{ $item->id_user }}</td>
                    <td>{{ $item->name_user }}</td>
                    <td>{{ $item->login }}</td>
                    <td>{{ $item->password }}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
@extends ('plantilla')
@section('seccion')
    <div class="container my-4">
        <h1 class="display-4">Lista de Colegiados</h1>
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Dni</th>
                <th scope="col">Código CIP</th>
            </tr>
            </thead>
            <tbody>
            @foreach($usuarios as $item)
                <tr>
                    <td scope="row">{{ $item->id }}</td>
                    <td>{{ $item->name_partaker }}</td>
                    <td>{{ $item->dni }}</td>
                    <td>{{ $item->cod_cip }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
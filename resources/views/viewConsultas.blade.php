@extends ('plantilla')
@section('seccion')
    <div class="container my-4">
        <h1 class="display-4">Cursos Realizados</h1>
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">DNI CIP</th>
                <th scope="col">Fecha</th>
            </tr>
            </thead>
            <tbody>
            @foreach($consultas as $item)
                <tr>
                    <td scope="row">{{ $item->id_query }}</td>
                    <td>{{ $item->dni_cip }}</td>
                    <td>{{ $item->date_consult }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
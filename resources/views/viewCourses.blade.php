@extends ('plantilla')
@section('seccion')
    <div class="container my-4">
        <h1 class="display-4">Cursos Realizados</h1>
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre del Curso</th>
                <th scope="col">Cantidad de horas</th>
                <th scope="col">Monto</th>
                <th scope="col">Fecha</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cursos as $item)
                <tr>
                    <td scope="row">{{ $item->id_course }}</td>
                    <td>{{ $item->name_course }}</td>
                    <td>{{ $item->hours }}</td>
                    <td>{{ $item->amount }}</td>
                    <td>{{ $item->date }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
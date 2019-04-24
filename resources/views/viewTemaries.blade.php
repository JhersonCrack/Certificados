@extends ('plantilla')
@section('seccion')
    <div class="container my-4">
        <h1 class="display-4">Temas</h1>
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre del Tema</th>
                <th scope="col">Ponente</th>
                <th scope="col">Curso</th>
            </tr>
            </thead>
            <tbody>
            @foreach($temas as $item)
                <tr>
                    <td scope="row">{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->ponent }}</td>
                    <td>{{ $item->course->name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
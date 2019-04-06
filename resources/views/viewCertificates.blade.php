@extends ('plantilla')
@section('seccion')
    <div class="container my-4" id="app">
        <example-component></example-component>
        <h1 class="display-4">Cursos Realizados</h1>
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Direccion de pdf</th>
                <th scope="col">Codigo qr</th>
                <th scope="col">Curso</th>
                <th scope="col">Participante</th>
                <th scope="col">Tipo de Participacion</th>
            </tr>
            </thead>
            <tbody>
            @foreach($certificados as $item)
                <tr>
                    <td scope="row">{{ $item->id_certificates }}</td>
                    <td>{{ $item->t_certificateslink }}</td>
                    <td>{{ $item->qr_key }}</td>
                    {{--aqui las llaves foraneas--}}
                    <td>{{ $item->name_course}}</td>
                    <td>{{ $item->t_partaker_id }}</td>
                    <td>{{ $item->t_type_participation_id }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
@extends ('plantilla')
@section('seccion')
    <div class="container my-4" id="app">
        <example-component></example-component>
        <h1 class="display-4">Cursos Realizados</h1>
        <input type="text" value="Buscar">
        <br><br>
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
                    <td scope="row">{{ $item->id }}</td>
                    <td>{{ $item->t_certificateslink }}</td>
                    <td>{{ $item->qr_key }}</td>
                    {{--aqui las llaves foraneas--}}
                    <td>{{ $item->course_id  }}</td>
                    <td>{{ $item->partaker_id }}</td>
                    <td>{{ $item->participation_id }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <button> Agregar Certificado</button>
        <button> Editar Certificados</button>
    </div>
@endsection
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
            @foreach($nombres as $item)

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    {{--aqui las llaves foraneas--}}
                    <td>{{ $item}}</td>
                    <td></td>
                    <td></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <button> Agregar Certificado</button>
        <button> Editar Certificados</button>
    </div>
@endsection
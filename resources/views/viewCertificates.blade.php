<!DOCTYPE html>
<html lang="es">
<head>
    <title>Certificados</title>
    <link href="./requirements/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
{{--código neutro--}}
<body style="background-image: url(http://elingeniero.org.pe/images/binding_light.png);">
    <div class="container">
        <div class="row">
            <p style="text-align: center; padding: 30px 0px;">
                <img class="sp-default-logo" src="./images/logo_eling_puno.png" alt="El Ingeniero" width="300px">
            </p>
            <div class="col-md-8">
                {{-- <div class="page-header">
                    {{ Form::open(['route' => 'certifis', 'method' => 'GET', 'class'=> 'form-inline pull-right']) }}
                        <div class="form-group">
                            {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::text('dni', null, ['class' => 'form-control', 'placeholder' => 'DNI']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::text('cip', null, ['class' => 'form-control', 'placeholder' => 'Cod CIP']) }}
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-default">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </div>
                    {{ Form::close() }}
                </div> --}}
                <form class="form-group" action="/searchCodigo" method="GET">
                    <div class="form-inline">
                        <label>Codigo Cip</label>
                        <input type="search" name="search" class="form-control" placeholder="Cip">
                        <span class="form-group-btn">
                            <button type="submit" class="btn btn-default">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <a href="">Sólo Administradores</a>
            </div>
            <div class="col-md-12">
                <table class="table table-hover table-striped">
                    <br>
                    <tr style="background: #343a40; color: white !important">
                        <th scope="col">N°</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">DNI</th>
                        <th scope="col">CIP</th>
                        <th scope="col">Curso</th>
                        <th scope="col">Participación</th>
                    </tr>
                    <tbody>
                        @foreach($certificados as $item)
                        <tr>
                            <td> {{ $item->id }}</td>
                            <td> {{ $item->user_name }}</td>
                            <td> {{ $item->user_dni }}</td>
                            <td> {{ $item->user_cip }}</td>
                            <td> {{ $item->curso_name }}</td>
                            <td> {{ $item->type_name }}</td>                        
                        </tr>
                        @endforeach
                    </tbody>
                </table>
               
            </div>
        </div>
        <a href="/" class="btn btn-info">Regresar</a>
    </div>
</body>
</html>
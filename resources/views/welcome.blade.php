<!DOCTYPE html>
<html lang="es">
<head>
    <title>Certificados</title>
    <link href="./requirements/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body style="background-image: url(http://elingeniero.org.pe/images/binding_light.png);">
<div class="container">
    <div class="row">
        <p style="text-align: center; padding: 30px 0px;">
            <img class="sp-default-logo" src="./images/logo_eling_puno.png" alt="El Ingeniero" width="300px">
        </p>
        <div class="col-md-8">
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
        <a href="{{ route('home') }}" class="btn btn-info">Modo administrador</a>
    </div>
</div>
</body>
</html>
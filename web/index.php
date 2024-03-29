<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets\css\border.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.html"> <img src="assets\images\phplogo.svg" width="30" height="30" class="d-inline-block align-top mx-1" alt=""></a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="empleados.php">Ver Usuarios Registrados</a>
                </li>
            </ul>
          
        </div>
    </nav>

    <div class="container border red">
        <div class="form-row ">
            <div class="col-lg-12 col-md-12 border purple text-center">
                <h1>Formulario empleo</h1>
            </div>
            <div class="col-lg-12 col-md-12 border green">
                <div class="col-lg-6 col-md-10 mx-auto border orange">
                    <form class="needs-validated my-1" action="./registrar.php" method="post" autocomplete="on" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" name="user[nombre]" id="user[nombre]" aria-describedby="helperName" placeholder="Mauricio" required>
                            <small id="helperName" class="form-text text-muted">Escriba su nombre :D</small>
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellido</label>
                            <input type="text" class="form-control" name="user[apellido]" id="user[apellido]" aria-describedby="helpApellido" placeholder="Contreras" required>
                            <small id="helpApellido" class="form-text text-muted">Escriba su apellido :3</small>
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo</label>
                            <input type="text" class="form-control" name="user[correo]" id="user[correo]" aria-describedby="helpCorreo" placeholder="gezio111@gmail.com" required>
                            <small id="helpCorreo" class="form-text text-muted">Escriba su correo :3</small>
                        </div>
                        <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <input type="text" class="form-control" name="user[telefono]" id="user[telefono]" aria-describedby="helptelefono" placeholder="78443001" required>
                            <small id="helptelefono" class="form-text text-muted">Escriba su telefono :3</small>
                        </div>
                        <div class="form-group border purple text-center">
                            <label for="cvfile">Curriculum</label>
                            <input type="file" accept="application/pdf" class="form-control-file text-center" name="user[cvfile]" id="user[cvfile]" placeholder="CV.pdf" aria-describedby="fileHelpId">
                            <small id="fileHelpId" class="form-text text-muted">Elegir un archivo .PDF o .DOCX</small>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?= $data["titulo"] ?></title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Dropdown Structure -->
    <ul id="subMenuUsuarios" class="dropdown-content">
        <li><a href="<?= getUrlControllerMethod('Usuario','listar') ?>">Listar</a></li>
        <li class="divider"></li>
        <li><a href="<?= getUrlControllerMethod('Usuario','registro') ?>">Registro</a></li>
    </ul>
    <nav>
        <div class="nav-wrapper">
            <a href="#!" class="brand-logo">Logo</a>
            <ul class="right hide-on-med-and-down">
                <!-- Dropdown Trigger -->
                <li>
                    <a class="dropdown-trigger" href="#!" data-target="subMenuUsuarios">
                        Usuarios<i class="material-icons right">arrow_drop_down</i>
                    </a>
                </li>
                <li><a href="#">Productos</a></li>
                <li><a href="#">Ventas</a></li>
            </ul>
        </div>
    </nav>
    <h4><?= $data["titulo"] ?></h4>
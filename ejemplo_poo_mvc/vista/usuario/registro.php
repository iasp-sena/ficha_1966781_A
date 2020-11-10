<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Usuarios - Listar</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
</head>
<body>
<div class="row">
    <form class="col s12" action="<?= CONTEXT_ROOT . '/index.php' ?>" method="GET">
        <input type="hidden" name="controller" value="UsuarioController" />
        <input type="hidden" name="method" value="registrar" />
      <div class="row">
        <div class="input-field col s12">
          <input id="nombres" name="nombres" type="text" class="validate">
          <label for="nombres">Nombres</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="apellidos" name="apellidos" type="text" class="validate">
          <label for="apellidos">Apellidos</label>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
            <button type="submit" class="waves-effect waves-light btn">
                <i class="material-icons right">save</i>Guardar
            </button>
        </div>
      </div>
    </form>
  </div>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <?php if ($mensaje){ ?>
        <script>M.toast({html: '<?= $mensaje ?>'})</script>
    <?php } ?>
</body>
</html>
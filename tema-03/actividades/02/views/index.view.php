<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actividad 32 - Formulario de registro</title>

    <!-- css bootstrap básico 6.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">

    <!-- icons bootstrap 1.13.1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css">
</head>

<body>
    <!-- capa principal de la aplicación -->
    <div class="container mt-3">

        <!-- cabecera de la aplicación -->
        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-r-square-fill"></i>
            <span class="fs-6">Actividad 32 - Formulario de registro</span>
        </header>
        <!-- contenido principal de la aplicación -->
        <main>
            <!-- formulario de entrada --> 
             <h2>Formulario de registro</h2>
            <form action="acceso.php" method="post">
                <!-- cammpo usuario -->
                <div class="mb-3">
                    <label for="exampleInputEmail1">Nombre usuario</label>
                    <input type="text" class="form-control" id="exampleInputName1" name="usuairo" placeholder="Nombre">
                    
                </div>
                <!-- Campo email -->
                <div class="mb-3">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                    
                </div>
                <!-- campo perfil -->
                <div class="mb-3">
                    <label for="exampleInputEmail1">Perfil de usuario</label>
                    <select class="form-select" name="perfil" required>
                        <option selected disabled>Selecciona un perfil</option>
                        <?php foreach ($perfiles as $perfil):?>
                            <option value ="<?=$perfil?>"><?= ucfirst($perfil)?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <!-- campo contraseña -->
                <div class="mb-3">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">revisame</label>
                </div>
                <button type="submit" class="btn-solid theme-primary">Entrar</button>
            </form>
        </main>

        <!-- pie de página de la aplicación -->
        <footer class="footer mt-auto py-3 fixed-bottom bg-light">
            <div class="container">
                <span class="text-muted">&copy; 2026
                    Antonio Hernández Gilabert - DWES - 2º DAW - Curso 26/27
                </span>
            </div>
        </footer>

          <!-- js bootstrap básico 6.0 -->
        <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>

    </div>
</body>

</html>
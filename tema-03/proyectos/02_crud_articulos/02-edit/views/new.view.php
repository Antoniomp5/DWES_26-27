<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto 3.2 - CRUD - Artículos</title>

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
            <i class="bi bi-stack"></i>
            <span class="fs-6">CRUD - Artículos</span>
        </header>
        <!-- contenido principal de la aplicación -->
        <main>
            <legend>Nuevo artículo</legend>
            <form action="create.php" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                </div>
                <div>
                    <label for="exampleCheck1">Check me out</label>
                    <input type="checkbox" id="exampleCheck1" class="check">
                </div>
                <div>
                    <label for="exampleCheck1">Check me out</label>
                    <input type="checkbox" id="exampleCheck1" class="check">
                </div>
                <div>
                    <label for="exampleCheck1">Check me out</label>
                    <input type="checkbox" id="exampleCheck1" class="check">
                </div>
                <a class="btn-solid theme-secondary" href="index.php" role="button">Cancelar</a>
                <button type="reset" class="btn-solid theme-warning">Borrar</button>
                <button type="submit" class="btn-solid theme-primary">Agregar</button>
            </form>
    </div>

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
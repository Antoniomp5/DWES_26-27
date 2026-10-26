<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto-3.1</title>

    <!-- css bootstrap básico 6.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">


    <!-- icons bootstrap 1.13.1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="container mt-3">

        <!-- cabecera de la aplicación -->
        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-stack"></i>
            <span class="fs-6">Proyecto 3.1</span>
        </header>
        <main>
            <legend>Editar el libro</legend>
            <!-- capa principal de la aplicación -->
            <div class="container mt-3">
                <form action="update.php?indice=<?= $indice ?>" method="post">
                    <fieldset enabled>
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Título</label>
                            <input type="text" id="titulo" class="form-control" name="titulo" value="<?= $libro['titulo'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="autor" class="form-label">Autor</label>
                            <input type="text" id="autor" class="form-control" name="autor" value="<?= $libro['autor'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="genero" class="form-label">Género</label>
                            <input type="text" id="genero" class="form-control" name="genero" value="<?= $libro['genero'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="editorial" class="form-label">Editorial</label>
                            <!-- Corregido el id de editoiral a editorial -->
                            <input type="text" id="editorial" class="form-control" name="editorial" value="<?= $libro['editorial'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="precio" class="form-label">Precio</label>
                            <!-- Corregido el id de preico a precio -->
                            <input type="text" id="precio" class="form-control" name="precio" value="<?= $libro['precio'] ?>" required>
                        </div>

                        <!-- BOTONES CORREGIDOS -->
                        <!-- Si tu controlador principal está en la raíz, asegúrate de que se llama index.php -->
                        <a class="btn-solid theme-danger" href="index.php">Cancelar</a>
                        <button type="reset" class="btn-solid theme-warning">Borrar</button>
                        <button type="submit" class="btn-solid theme-success">Actualizar</button>
                    </fieldset>
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
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Examen Práctico Tema 2 - Inserción de Código en Páginas WEB</title>

    <!-- css bootstrap básico 5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- icons bootstrap 1.13.1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css">
</head>

<body>
    <!-- capa principal de la aplicación -->
    <div class="container mt-3">

        <!-- cabecera de la aplicación -->
        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-car-front-fill"></i>
            <span class="fs-6">Examen Práctico Tema 2: Inserción de Código en Páginas WEB</span>
        </header>

        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content">
                <!-- Labels para poner los valores iniciales -->
                <form>
                    <div>
                        <label for="floatingInput">velocidad inicial (m/s) </label>
                        <input type="<?$velocidad_inicial?>" class="form-control" id="floatingInput" placeholder="0,00" >
                        <label for="floatingInput">aceleración inicial (m/s^2) </label>
                        <input type="<?$aceleracion_inicial?>" class="form-control" id="floatingInput" placeholder="0,00">
                        <label for="floatingInput">tiempo inicial (s) </label>
                        <input type="<?$tiempo_inicial?>" class="form-control" id="floatingInput" placeholder="0,00">
                        <label for="floatingInput">masa del objeto (kg) </label>
                        <input type="<?$masa_objeto?>" class="form-control" id="floatingInput" placeholder="0,00">
                    </div>
                </form>

                <!-- Bototes de acción -->
                <form>
                    <div>
                        <button class="btn-solid theme-danger" type="reset">Borrar</button>
                        <button class="btn-solid btn-styled theme-warning" type="submit" src="calcular.php" formaction="views/view.resultados.php">Calcular</button>
                    </div>
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

        <!-- js bootstrap básico 5.3.8 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    </div>
</body>

</html>
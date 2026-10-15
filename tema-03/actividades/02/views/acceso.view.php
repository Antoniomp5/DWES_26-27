<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actividad 32 - Formulario de registro</title>

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
            <i class="bi bi-r-square-fill"></i>
            <span class="fs-6">Actividad 32 - Formulario de registro</span>
        </header>
        <!-- contenido principal de la aplicación -->
        <main>
            <!-- formulario de entrada -->
            <h2>Formulario de registro</h2>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                </li>
                <?php if ($perfil === 'admin' || $perfil === 'edit'): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Añadir</a>
                    </li>
                <?php endif; ?>
                <?php if ($perfil === 'admin'): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Elimniar</a>
                    </li>
                <?php endif; ?>
                <?php if ($perfil === 'admin' || $perfil === 'edit'): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Actualizar</a>
                    </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a class="nav-link" href="#">Consultar</a>
                </li>
            </ul>
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
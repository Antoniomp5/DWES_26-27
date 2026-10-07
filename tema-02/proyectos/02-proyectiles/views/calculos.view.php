<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto 2.1 - Calculadora Básica</title>

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
            <i class="bi bi-rocket-takeoff-fill"></i>
            <span class="fs-6">Proyecto 2.2 - Calculadora de Lanzamiento de Proyectiles</span>
        </header>

        <!-- contenido principal de la aplicación -->
        <main>
            <!-- Formulario de la calculadora -->
            <table class ="table">
                <thead>
                    <tr>
                        <th colspan="2" class="text-left">Valores iniciales</th>
                        <th>Valor</th>
                    </tr>
                </thead>

                <tbody>
                    <!-- Velocidad inicial -->
                    <tr>
                        <td colspan="2">
                            <small class="form-text text-muted">
                                Velocidad inicial del proyectil en m/s.
                            </small>
                        </td>
                        <td>
                            <?= $velocidad_inicial ?> m/s
                        </td>
                    </tr>

                    <!-- Ángulo de lanzamiento -->
                    <tr>
                        <td colspan="2">
                            <small class="form-text text-muted">
                                Ángulo de lanzamiento en grados.
                            </small>
                        </td>
                        <td>
                            <?= $angulo_lanzamiento ?>°
                        </td>
                    </tr>

                    <!-- Resultados -->
                    <tr>
                        <td colspan="2">Ángulo en radianes:</td>
                        <td>
                            <?= $angulo_rad ?> rad
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">Velocidad horizontal (Vx):</td>
                        <td>
                            <?= $vx ?> m/s
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">Velocidad vertical (Vy):</td>
                        <td>
                            <?= $vy ?> m/s
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">Tiempo de vuelo:</td>
                        <td>
                            <?= $tiempo_de_vuelo ?> s
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">Altura máxima:</td>
                        <td>
                            <?= $max_altura ?> m
                        </td>
                    </tr>


                    <!-- Botón de acción -->
                    <tr>
                        <td colspan="3">
                            <div class="btn-group" role="group">
                                <a
                                    class="btn btn-warning"
                                    href="index.php"
                                    role="button">
                                    Nuevo Cálculo
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
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
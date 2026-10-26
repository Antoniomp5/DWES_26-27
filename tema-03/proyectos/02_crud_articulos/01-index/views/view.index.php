<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>02_crud_articulos</title>

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
            <span class="fs-6">02 Crud Artículos</span>
        </header>

        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content">
                <legend>Tabla de articulos</legend>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Categoría</th>
                            <th scope="col">Unidades</th>
                            <th scope="col" class="text-end">Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($articulos as $articulo):?>
                        <tr>
                            <th scope="row" class="text-end"><?= $articulo['id']?></th>
                            <td socope="row"><?= $articulo['Descripcion']?></td>
                            <td socope="row"><?= $articulo['Marca']?></td>
                            <td socope="row"><?= $articulo['Categoria'] ?></td>
                            <td socope="row" class="text-end"><?= $articulo['Unidades']?></td>
                            <td socope="row" class="text-end"><?= number_format($articulo['Precio'], 2, ',', '.')?> €</td>
                        </tr>
                        <?php endforeach;?>

                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5" class="text-end">Total</td>
                            <td class="text-end"><?= count($articulos) ?></td>
                        </tr>
                    </tfoot>
                </table>

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
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto 4.1 - CRUD - Artículos - POO Ecapsulación</title>

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
            <span class="fs-6">Proyecto 4.1 - CRUD - Artículos - POO Ecapsulación</span>
        </header>
        <nav class="navbar md:navbar-expand bg-1">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="btn-icon navbar-toggler" type="button" data-bs-toggle="drawer" data-bs-target="#navbarDrawer" aria-controls="navbarDrawer" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" aria-hidden="true"></span>
                </button>
                <dialog class="drawer drawer-end" tabindex="-1" id="navbarDrawer" aria-labelledby="navbarDrawerLabel">
                    <div class="drawer-header">
                        <h5 class="drawer-title" id="navbarDrawerLabel">Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="drawer" aria-label="Close"></button>
                    </div>
                    <div class="drawer-body mb-2 md:mb-0">
                        <ul class="nav navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" type="button" data-bs-toggle="menu" aria-expanded="false">
                                    Menu
                                </button>
                                <div class="menu">
                                    <a class="menu-item" href="#">Action</a>
                                    <a class="menu-item" href="#">Another action</a>
                                    <hr class="menu-divider">
                                    <a class="menu-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                            </li>
                        </ul>
                        <form class="hstack gap-2" role="search">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
                            <button class="btn-solid btn-icon theme-secondary" type="submit">
                                <i class="bi bi-search"></i>
                            </button>
                        </form>
                    </div>
                </dialog>
            </div>
        </nav>


        <!-- contenido principal de la aplicación -->
        <main>
            <legend>Tabla de artículos - POO</legend>
            <div class="content">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Descripcíon</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Categoría</th>
                            <th scope="col">Unidades</th>
                            <th scope="col">Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($articulos as $indice => $articulo): ?>
                            <tr>
                                <td scope="row" class="text-end"><?= $articulo->getId() ?></td>
                                <td scope="row"><?= $articulo->getDescripcion() ?></td>
                                <td scope="row"><?= $articulo->getModelo() ?></td>
                                <td scope="row"><?= $marcas[$articulo->getMarca()] ?></td>
                                <td scope="row">
                                    <?= implode(', ', $tabla_articulos->get_indice_Categorias_a_Nombres($articulo->getCategoria())) ?>
                                </td>
                                <td scope="row" class="text-end"><?= $articulo->getUnidad() ?></td>
                                <td scope="row" class="text-end"><?= number_format($articulo->getPrecio(), 2, ',', '.') ?> €</td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6" class="text-end">Total</td>
                            <td class="text-end"><?= count($articulos)  ?></td>
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
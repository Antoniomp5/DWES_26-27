<!doctype html>
<html lang="es">

<head>
    <!-- Cargar la cabercera de la aplicación  -->
    <?php require_once __DIR__ . '/layouts/head.layout.php'; ?>
    <title>Proyecto 4.2 - CRUD Artículos - POO Sín Encapsulación</title>
</head>

<body>
    <!-- capa principal de la aplicación -->
    <div class="container mt-3">

        <!-- cabecera de la aplicación -->
        <?php require_once __DIR__ . '/partials/header.partial.php'; ?>

        <!-- Menú principal de la aplicación -->
        <nav class="navbar md:navbar-expand bg-1">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Artículos</a>
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
                                <a class="nav-link active" aria-current="page" href="index.php">Listado</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="new.php">Nuevo</a>
                            </li>
                        </ul>
                    </div>
                </dialog>
            </div>
        </nav>

        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content">
                <legend>Tabla de artículos - POO</legend>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="text-end">Id</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Categorías</th>
                            <th scope="col" class="text-end">Unidades</th>
                            <th scope="col" class="text-end">Precio</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($articulos as $indice => $articulo): ?>
                            <tr>
                                <th scope="row" class="text-end"><?= $articulo->id ?></th>
                                <td><?= $articulo->descripcion ?></td>
                                <td><?= $articulo->modelo ?></td>
                                <td><?= $marcas[$articulo->marca] ?></td>
                                <td><?= implode(', ', $tabla_articulos->get_indice_categorias_a_nombres($articulo->categorias)) ?></td>
                                <td class="text-end"><?= $articulo->unidades ?></td>
                                <td class="text-end"><?= number_format($articulo->precio, 2, ',', '.') ?> €</td>
                                <!-- botones de acción -->
                                <td>
                                    <!--  editar -->
                                    <a href="edit.php?id=<?= $indice ?>" class="btn-outline theme-success">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <!--  borrar -->
                                    <a href="delete.php?id=<?= $indice ?>" class="btn-outline theme-danger">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                    <!--  mostrar -->
                                    <a href="show.php?id=<?= $indice ?>" class="btn-outline theme-info">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="7">Total</td>
                            <td><?= count($articulos) ?></td>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </main>

        <!-- pie de página de la aplicación -->
        <?php require_once __DIR__ . '/partials/footer.partial.php'; ?>

        <!-- js bootstrap básico 6.0 -->
        <?php require_once __DIR__ . '/layouts/js_bootstrap.php'; ?>

    </div>
</body>

</html>
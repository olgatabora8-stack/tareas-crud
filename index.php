<?php require_once "config/conexion.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud de Tareas</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/src/output.css">
</head>
<body>
    <!-- header -->
    <?php include_once "views/includes/header.php"; ?>

    <!-- main -->
    <main class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 py-4 hws">
        <div class="max-w-7xl mx-auto bg-zinc-200 backdrop:blur-xl shadow-lg p-4">
            <h2 class="uppercase text-xl font-bold text-center py-4">Listado de tareas</h2>
            <p class="text-center text-ellipsis py-5">Listado de tareas asignadas a los empleados</p>
            <a href="<?= BASE_URL ?>views/empleados/agregar.php"
               class="bg-amber-500 hover:bg-amber-700 cursor-pointer text-white font-bold py-2 px-4 rounded-xl mb-4"
               id="btnAddTask">Agregar Empleado</a>
        </div>
    </main>

<!-- footer -->
    <?php include_once "views/includes/footer.php"; ?>
</body>
</html>
<?php include("db.php"); ?>
<?php include("consult_task.php"); ?>
<?php include("base/base.php")?>;

<!DOCTYPE html>
<html lang="en">
<body>
    <div class="container mt-5">
        <h1 class="text-center">Sistema de Hoteles</h1>

        <table class="table table-bordered table-striped mt-3">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Ciudad</th>
                    <th>NIT</th>
                    <th>Número de habitaciones</th>
                    <th>Tipo de Habitación</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result_task)): ?>
                    <tr>
                        <td><?php echo ($row['name']); ?></td>
                        <td><?php echo ($row['direction']); ?></td>
                        <td><?php echo ($row['city']); ?></td>
                        <td><?php echo ($row['NIT']); ?></td>
                        <td><?php echo ($row['n_room']); ?></td>
                        <td><?php echo ($row['type_room']); ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        </button>
                 <a href="index.php" class="btn btn-success">
                    <i class="fa-solid fa-list"></i> Inicio
                 </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php include("db.php"); ?>
<?php include("base/base.php")?>;
<!DOCTYPE html>
<html lang="en">
<body>
    <div class="container mt-5">
        <h1 class="display-1 text-center">Sistema de Hoteles</h1>

        <form action="save_task.php" method="POST" class="row g-3" id="hotelForm">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Nombre</th>
                        <th>Dirección</th>
                        <th>Ciudad</th>
                        <th>NIT</th>
                        <th>Número de habitaciones</th>
                        <th>Tipo de Habitación</th>
                        <th>Acomodación</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="name" class="form-control" placeholder="Nombre" required></td>
                        <td><input type="text" name="direction" class="form-control" placeholder="Dirección" required></td>
                        <td><input type="text" name="city" class="form-control" placeholder="Ciudad" required></td>
                        <td><input type="text" name="nit" class="form-control" placeholder="NIT" required></td>
                        <td><input type="text" name="n_room" class="form-control" placeholder="Número de habitaciones" required ></td>
                        <td>
                            <select name="type_room" class="form-select" id="typeRoom" required>
                                <option value="">Seleccione</option>
                                <option value="Estándar">ESTÁNDAR</option>
                                <option value="Junior">JUNIOR</option>
                                <option value="Suite">SUITE</option>
                            </select>
                        </td>
                        <td>
                            <select name="acomodacion" class="form-select" id="acomodacion" required>
                                <option value="">Seleccione</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="d-grid gap-2">
                <button type="submit" name="save_task" class="btn btn-primary">
                    <i class="fas fa-save"></i> Enviar
                </button>
                 <a href="consult.php" class="btn btn-success">
                 <i class="fas fa-search"></i> Consultar información
                 </a>
            </div>
        </form>
    </div>


</body>
</html>
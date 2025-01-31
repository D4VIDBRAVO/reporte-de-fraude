<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Reporte</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <center><div id="form1">
        <form action="insertar_reporte.php" method="POST">
            <label for="id_reportado">ID de Usuario Reportado:</label><br>
            <input type="text" id="id_reportado" name="id_reportado" required><br>
            <label for="descripcion_reporte">Descripción de Reporte:</label><br>
            <textarea id="descripcion_reporte" name="descripcion_reporte" required></textarea><br>
            <label for="fecha">Fecha:</label><br>
            <input type="date" id="fecha" name="fecha" required><br>
            <label for="id_reporta">ID de Usuario que Reporta:</label><br>
            <input type="text" id="id_reporta" name="id_reporta" required><br>
            <label for="pais">País:</label><br>
            <select id="pais" name="pais">
                <option value="Panama">Panama</option>
                <option value="El_Salvador">El Salvador</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Dominicana">Dominicana</option>
                <option value="Puerto_Rico">Puerto Rico</option>
                <option value="Chile">Chile</option>
                <option value="Costa_Rica">Costa Rica</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Hondura">Hondura</option>
                <option value="Colombia">Colombia</option>
                <option value="Paraguay">Paraguay</option>
            </select><br><br>
            <label for="canal_reporte">Canal de Reporte:</label><br>
            <input type="text" id="canal_reporte" name="canal_reporte" required><br>
            <label for="status">Status:</label><br>
            <input type="text" id="status" name="status" required><br>
            <input type="submit" value="Enviar">
        </form>
    </div>
    </center>
    <div id="form2">
        <form action="admin.php" method="get">
            <h2>Descargar Data</h2>
            <input type="submit" value="Data">
        </form>
    </div>

</body>
</html>

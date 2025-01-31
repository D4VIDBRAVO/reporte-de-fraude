<!DOCTYPE html>
<html>
<head>
    <title>Administrador de Base de Datos</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Administrador de Base de Datos</h1>

        <!-- Formulario para filtrar por fechas -->
        <div class="form-container">
            <form id="filtro-fechas">
                <label for="fecha_inicio">Fecha de inicio:</label>
                <input type="date" id="fecha_inicio" name="fecha_inicio">
                <label for="fecha_fin">Fecha de fin:</label>
                <input type="date" id="fecha_fin" name="fecha_fin">
                <button type="submit">Filtrar</button>
            </form>
        </div>

        <!-- Tabla para mostrar datos en vivo -->
        <div id="resultados">
            <!-- Los resultados filtrados se mostrarán aquí -->
        </div>

        <!-- Botón para descargar en PDF -->
        <div class="form-container">
            <form action="generar_pdf.php" method="POST">
                <h2>Descargar en PDF</h2>
                <input type="hidden" id="fecha_inicio_pdf" name="fecha_inicio">
                <input type="hidden" id="fecha_fin_pdf" name="fecha_fin">
                <input type="submit" value="Descargar PDF">
            </form>
        </div>

      
       <div class="form-container">
            <form action="index.php" method="POST">
                <h2>Cargar Datos</h2>
                <input type="submit" value="Admin" a href= "http://localhost/basefraude/index.php"target="_blank">
            </form>
        </div>

    <script>
        $(document).ready(function() {
            $('#filtro-fechas').submit(function(event) {
                event.preventDefault();
                var fechaInicio = $('#fecha_inicio').val();
                var fechaFin = $('#fecha_fin').val();

                // Actualiza los campos ocultos en los formularios de PDF y Excel
                $('#fecha_inicio_pdf').val(fechaInicio);
                $('#fecha_fin_pdf').val(fechaFin);

                $.ajax({
                    url: 'filtrar.php',
                    method: 'POST',
                    data: {
                        fecha_inicio: fechaInicio,
                        fecha_fin: fechaFin
                    },
                    success: function(data) {
                        $('#resultados').html(data);
                    }
                });
            });
        });
    </script>
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <footer>
        <?php
    // Establece la zona horaria (opcional)
    date_default_timezone_set('America/Mexico_City'); // Cambia 'America/Mexico_City' por tu zona horaria

    // Obtiene la fecha actual
    $fecha_actual = date('Y-m-d H:i:s');

    // Muestra la fecha en el footer
    echo "© " . date('Y') . "Pablo Escalante © 2023 - FanFilm. $fecha_actual";
    ?>
        
    </footer>
</body>
</html>
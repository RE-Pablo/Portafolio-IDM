<?php include("includes/db.php")?>

<?php include("includes/header.php") ?>

    <style>
        <?php include("includes/stylesB.css") ?>
    </style>

    <header>
        <h1 class = "animate__animated animate__slideInUp">Contacto</h1>
        <div class="button-container">
            <button id="btnLogin" type="button" class="btn btn-outline-light me-2">Login</button>
            <button id="btnSignup" type="button" class="btn btn-warning">Sign-up</button>
        </div>

        <script>
            // Función para redirigir al usuario a otro archivo
            function AbrirLogin() {
              // Cambia "ruta/al/archivo.html" por la URL del archivo al que deseas redirigir
                window.location.href = "login.php";
            }
            // Agrega un evento de clic al botón con ID "LoveRosie"
            document.getElementById("btnLogin").addEventListener("click", AbrirLogin);
            document.getElementById("btnSignup").addEventListener("click", AbrirLogin);
        </script>
    </header>

    <main>
        <nav class="navbar navbar-dark bg-dark" aria-label="First navbar example">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Menu</a>

                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                

                <div class="collapse navbar-collapse" id="navbarsExample01">
                    <ul class="navbar-nav me-auto mb-2">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="inicio.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pelicula.php">Peliculas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="buscar.php">Buscar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="perfil.php">Perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container mt-4">
            <form action="save_task.php" method="POST">
                <div class="form-group">
                    <label for="formGroupExampleInput">Nombre Completo</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa tu nombre">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Correo Electronico</label>
                    <input type="email" class="form-control" id="email" name="correo" aria-describedby="emailHelp" placeholder="Ingresa tu correo">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Telefono</label>
                    <input type="cellphone" class="form-control" id="telefono" name="telefono" placeholder="Ingresa tu telefono">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Comentario</label>
                    <textarea class="form-control" id="comentario" name="comentario" placeholder="Comentario"></textarea>
                </div>
                <input type="submit" class="btn btn-success" name="save_task"></input>
            </form>
        </div>
    <main>
<?php include("includes/footer.php") ?> 
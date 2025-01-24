<?php include("includes/header.php") ?>

    <style>
        <?php include("includes/stylesPer.css")?>
    </style>

    <header>
        <h1 class = "animate__animated animate__slideInUp">Tu Perfil</h1>
        <div class="button-container">
            <button id="btnLogin" type="button" class="btn btn-outline-light me-2">Login</button>
            <button id="btnSignup" type="button" class="btn btn-warning">Sign-up</button>
        </div>
    </header>

    <!--
    <nav>
        <ul class = "menu">
            <li><a href="inicio.html">Inicio</a></li>
            <li><a href="pelicula.html">Películas</a></li>
            <li><a href="buscar.html">Buscar</a></li>
            <li><a href="perfil.html">Perfil</a></li>
        </ul>
    </nav>
    -->

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

        <section class="profile-details">
            <h2>Perfil</h2>
            <ul>
                <li><strong>Nombre:</strong> Nombre de usuario</li>
                <li><strong>Email:</strong> usuario@email.com</li>
                <li><strong>Fecha de Registro:</strong> 27 de enero de 2023</li>
                <li><strong>País:</strong> Tu país</li>
            </ul>
        </section>

        <section class="favorite-movies">
            <h2>Películas Favoritas</h2>
            <ul>
                <li>Película 1</li>
                <li>Película 2</li>
                <li>Película 3</li>
                <!-- peliculas Fav -->
            </ul>
        </section>

        <section class="favorite-genres">
            <h2>Géneros Favoritos</h2>
            <ul>
                <li>Género 1</li>
                <li>Género 2</li>
                <li>Género 3</li>
                <!-- generos Fav -->
            </ul>
        </section>

        <section class="profile-settings">
            <button>Configurar Perfil</button>
        </section>

        <section class="review-history">
            <h2>Historial de Críticas</h2>
            <!-- historial criticas -->
        </section>
    </main>

<?php include("includes/footer.php") ?> 
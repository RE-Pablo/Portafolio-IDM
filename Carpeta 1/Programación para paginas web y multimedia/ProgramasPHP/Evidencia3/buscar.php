<?php include("includes/header.php") ?>

    <style>
        <?php include("includes/stylesB.css")?>
    </style>

    <header>
        <h1 class = "animate__animated animate__slideInUp">Buscar</h1>
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
        <section class="search-movies">
            <h2>Buscar por Título o Género</h2>
            <form>
                <input type="text" id="search-title" placeholder="Buscar por Título">
                <input type="text" id="search-genre" placeholder="Buscar por Género">
                <button type="submit">Buscar</button>
            </form>
        </section>

        <section class="upcoming-movies">
            <h2>Próximos Estrenos</h2>
            <ul>
                <li>
                    <img src="pelicula1.jpg" alt="Película 1">
                    <h3>Película 1</h3>
                    <p>Fecha de Estreno: 01 de marzo de 2023</p>
                </li>
                <li>
                    <img src="pelicula2.jpg" alt="Película 2">
                    <h3>Película 2</h3>
                    <p>Fecha de Estreno: 15 de marzo de 2023</p>
                </li>
                <li>
                    <img src="pelicula3.jpg" alt="Película 3">
                    <h3>Película 3</h3>
                    <p>Fecha de Estreno: 30 de marzo de 2023</p>
                </li>
                <!-- Agrega estrenos -->
            </ul>
        </section>

        <section class="top-rated-movies">
            <h2>Mejor Calificadas</h2>
            <ul>
                <li>
                    <img src="mejor1.jpg" alt="Mejor Película 1">
                    <h3>Mejor Película 1</h3>
                    <p>Calificación: 4.8</p>
                </li>
                <li>
                    <img src="mejor2.jpg" alt="Mejor Película 2">
                    <h3>Mejor Película 2</h3>
                    <p>Calificación: 4.7</p>
                </li>
                <li>
                    <img src="mejor3.jpg" alt="Mejor Película 3">
                    <h3>Mejor Película 3</h3>
                    <p>Calificación: 4.6</p>
                </li>
                <!-- Top calificaciones -->
            </ul>
        </section>
    </main>

<?php include("includes/footer.php") ?> 

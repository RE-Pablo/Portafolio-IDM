<?php include("includes/db.php")?>

<?php


if (isset($_POST['save_task'])){
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $comentario = $_POST['comentario'];

    $query = "INSERT INTO contacto(nombre, correo, telefono, comentario) VALUES ('$nombre','$correo','$telefono','$comentario')";
    $result = mysqli_query($conn, $query);
    if (!$result){
        echo 'Query Failed';
    }

    header("Location: contacto.php");
}

?>
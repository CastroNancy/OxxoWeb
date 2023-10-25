<?php
include("./config.php");

if (isset($_POST['deletedata'])) {
    // tomar la identificación de la cadena de consulta
    $idEmp = $_POST['delete_idEmp'];

    // eliminar consulta
    $sql = "DELETE FROM fmoxxo WHERE idEmp = '$idEmp'";
    $query = mysqli_query($db, $sql);

    //¿Se eliminó correctamente la consulta?
    if ($query) {
        header('Location: ./index.php?hapus=sukses');
    } else
        die('Location: ./index.php?hapus=gagal');
} else
    die("akses dilarang...");

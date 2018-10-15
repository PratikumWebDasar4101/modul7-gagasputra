<?php
    include("connect.php");
    if (isset($_GET['nim'])) {
        $nim = $_GET['nim'];

        $database = "DELETE FROM mahasiswa WHERE nim = '$nim'";

        if (mysqli_query($connect, $database)) {
            echo "Delete Berhasil";
            header("Location: view.php");
        } else {
            echo "Delete Gagal : ".$database."<br>".mysqli_error($connect);
        }

        mysqli_close($connect);
    }
?>
<?php
    require("connect.php");
    if(isset($_POST['nim'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $fakultas = $_POST['fakultas'];
        $prodi = $_POST['prodi'];
        $asal = $_POST['asal'];
        $motto = $_POST['motto'];

        $database = "INSERT INTO mahasiswa VALUES ('$nim', '$nama', '$jenis_kelamin', '$fakultas', '$prodi', '$asal', '$motto');";

        if (mysqli_query($connect, $database)) {
            ?>
            <script>
                alert("Input Berhasil");
                location= "view.php";
            </script>
            <?php
        } else {
            ?>
            <script>
            alert("Input Gagal");
            location= "form.php";
            </script>
            <?php
        } 
        mysqli_close($connect);
    }
?>
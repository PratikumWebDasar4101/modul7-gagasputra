<?php
    require("connect.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title> Data Mahasiswa </title>
</head>
<body>
    <pre>
    <a href="form.php"><input type="button" value="Tambah Data"></a>
    <form action="view.php" method="POST">
        NIM  : <input type="text" name="search"> <input type="submit" value="Cari">
    </form>
        <table border="1" style="border-spacing: 0;">
            <tr>
                <th> Nama </th>
                <th> NIM </th>
                <th> Action </th>
            </tr>
            <?php
                @$search    = $_POST['search'];         
                $database   = "SELECT nim, nama FROM mahasiswa WHERE nim LIKE '%$search%'";
                $result     = mysqli_query($connect, $database);

                while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['nim']; ?></td>
                <td><a href="delete.php?nim=<?php echo $row['nim']; ?>"><input type="button" value="Delete"></a></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </pre>
</body>
</html>
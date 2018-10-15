<!DOCTYPE html>
<html>
    <head>
        <title> Form Mahasiswa </title>
    </head>
    <body>
        <pre>
        <h1> FORM MAHASISWA </h1>
            <form action="p_form.php" method="POST">
                NIM             : <input type="text" name="nim" pattern="\d*" maxlength="10" required> <br><br>
                Nama            : <input type="text" name="nama"> <br><br>
                Jenis Kelamin   : <input type="radio" name="jenis_kelamin" id="radio" value="Laki-Laki" > Laki-Laki <input type="radio" name="jenis_kelamin" id="radio" value="Perempuan" > Perempuan <br><br>    
                Fakultas        : <select name="fakultas" id="fakultas" required><br>
                    <option value="FTE"> FTE </option>
                    <option value="FIF"> FIF </option>
                    <option value="FRI"> FRI </option>
                    <option value="FEB"> FEB </option>
                    <option value="FKB"> FKB </option>
                    <option value="FIK"> FIK </option>
                    <option value="FIT"> FIT </option>
                    </select> <br><br>
                Program Studi   : <select name="prodi" id="prodi" required><br>
                    <option value="Manajemen Informatika"> Manajemen Informatika </option>
                    <option value="Teknik Telekomunikasi"> Teknik Telekomunikasi </option>
                    <option value="Teknik Informatika"> Teknik Informatika </option>
                    <option value="Teknik Komputer"> Teknik Komputer </option>
                    <option value="Manajemen Pemasaran"> Manajemen Pemasaran </option>
                    <option value="Perhotelan"> Perhotelan </option>
                    <option value="Komputerisasi Akuntansi"> Komputerisasi Akuntansi </option>
                    <option value="Sistem Multimedia"> Sistem Multimedia </option>
                    </select> <br><br>
                Asal            : <input type="text" name="asal"> <br><br>
                Motto           : <textarea name="motto" cols="20" rows="5"></textarea> <br><br>
                <input type="submit" name="submit" value="SUBMIT">
            </form>
        </pre>
    </body>
</html>
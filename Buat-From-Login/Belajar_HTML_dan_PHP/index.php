<!DOCTYPE html>
<html>
<head>
    <title>belajar</title>
</head>
<body>
    <h2>list siswa</h2>
    <table>
        <tr><th>ID</th><th>nama</th><th>kelas</th><th>jurusan</th></tr>
        <?php
            include "konesi.php";
            $siswa = mysqli_query($konesi, "SELECT * FROM siswa");
            $id_siswa = 1;
            foreach($siswa as $row){
        ?>
        <tr>
            <td><?php echo $row ['id_siswa']?></td>
            <td><?php echo $row ['nama']?></td>
            <td><?php echo $row ['kelas']?></td>
            <td><?php echo $row ['jurusan']?></td>
            <td>
                <a href="delete.php?id_siswa=<?php echo $row['id_siswa']?>">delete</a>
                <a href="update.php?id_siswa=<?php echo $row['id_siswa']?>">update</a>
            </td>
        </tr>
        <?php $id_siswa++;
            }
        ?>
    </table>
</body>
</html>
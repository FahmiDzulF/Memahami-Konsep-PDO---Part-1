<?php
    require_once "koneksi.php";
    $sql = "SELECT * FROM  users";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_BOTH);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
   <a href="create.php" style="text-decoration:none"><button type="button" onclick="javascript: 
        if(document.getElementById('form_tambah').style.display == 'none'){
            document.getElementById('form_tambah').style.display = 'block';
        }else{
            document.getElementById('form_tambah').style.display = 'none';
        }">Tambah Data</button></a>
    <br>
    <table border="0">
        <tr>
        <table width="100%" border="1" style="border-collapse:collapse;">
            <tr style="background-color:#6fc3d0; color:white;">
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tlp</th>
            <th>Hapus</th>
            <th>Edit</th>
        </tr>
        <?php foreach ($users as $user)  : ?>
        <tr>
            <td><?= $user['Nama'] ?></td>
            <td><?= $user['Alamat'] ?></td>
            <td><?= $user['Tlp'] ?></td>
            <td>
                <a href="delete.php?id=<?= $user['id']?>" title="">Hapus</a>
            </td>
            <td>
                <a href="edit.php?id=<?= $user['id']?>" title="">Edit</a>
            </td>
        </tr>
        <?php endforeach ;?>
    </table>
</body>
</html>
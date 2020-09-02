<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php //include('mylib/warga.lib.php'); 
include('mylib/myDb.php');

?>
<body>
<?php
$Db = new MyDb();
$data_warga = $Db->show();
//print_r($data_warga);
?>

<table border=1>
        <tr>
            <td>No</td>
            <td>No KTP</td>
            <td>Nama Lengkap</td>
            <td>Alamat</td>
            <td>No HP</td>
            <td>Action</td>
        </tr>
    <?php
    $i=0;
    foreach($data_warga as $data){ 
        $i++;
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $data['no_ktp']; ?></td>
            <td><?php echo $data['nama_lengkap']; ?></td>
            <td><?php echo $data['alamat_lengkap']; ?></td>
            <td><?php echo $data['no_hp']; ?></td>
            <td><a href="detail.php?id=<?php echo $data['id']; ?>">detail</a></td>
        </tr>
    <?php } ?>
    </table>
    
</body>
</html>
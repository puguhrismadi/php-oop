<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php include('mylib/warga.lib.php'); 
include('mylib/myDb.php');

?>
<body>
<?php
$warga1= new Warga();
$warga1->setPerson();
$warga1->person();
//parsing variabel lokal
echo "<hr>";
$warga1->person3('Puguh','Bogor');




//dump($data);
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
    <?php do{  ?>
        <tr>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['no_ktp']; ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    <?php }while($data = mysqli_fetch_array($baca)); ?>
    </table>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<?php //include('mylib/warga.lib.php'); 
include('mylib/myDb.php');

?>
<body>
<?php
$Db = new MyDb();
$data_warga = $Db->show();
//print_r($data_warga);
if(isset($_POST['daftar'])){
    //echo "Tombol Daftar Telah Di klik";
    $noktp=$_POST['no_ktp'];
    $nama = $_POST['nama_lengkap'];
    $alamat = $_POST['alamat_lengkap'];
    $nohp = $_POST['no_hp'];
    $querysimpan = $Db->add_data($noktp,$nama,$alamat,$nohp);
    //print_r($_POST);
    if($querysimpan==TRUE){
        echo "Data Tersimpan Ke Database";
    }else{
        echo "Data Gagal Simpan Ke Database";
    }
}
?>
<div class="container">
    <div class="col-12">
    <div class="py-3">
    <h2>Data Warga</h2>
        <a href="form-daftar.php" class='btn btn-success'>Tambah Data Warga</a>
    </div>
        
        <table class="table table-bordered" border=1>
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
    </div>
</div>

    
</body>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
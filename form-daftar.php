<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ford Registrasi Warga</title>
</head>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body>
    <div class="container">
   
    <div class="row">
        <div class="col-md-8">
        <h2>Form Registrasi Warga</h2>
        <hr>
        <form action="index.php" method="post">
            <div class="form-group">
                <label for="no_ktp">NO KTP</label>
                <input class="form-group" type="text" name="no_ktp" id="no_ktp">
            </div>
            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input class="form-group" type="text" name="nama_lengkap" id="nama_lengkap">
            </div>
            <div class="form-group">
                <label for="alamat_lengkap">Alamat Lengkap</label>
                <input class="form-group" type="text" name="alamat_lengkap" id="alamat_lengkap">
            </div>
            <div class="form-group">
                <label for="no_hp">Nomor HP</label>
                <input class="form-group" type="text" name="no_hp" id="no_hp">
            </div>
        <button class="btn btn-success" name="daftar" type="submit">Daftar </button>
        </form>

        </div>
    </div>
    </div>
</body>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
<?php 
include 'koneksi.php';
$data = $db->detail($_GET['id']);
?><!doctype html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Anggota Club</title>
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
   <div class="container">
      <h1 class="text-center mb-3">MUHAMMAD FAHRUR RIFAI</h1>
      <div class="row justify-content-center">
         <div class="col-md-4">
            <form action="index.php?id=<?php echo $data->id ?>" method="post">
               <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" name="nama" value="<?php echo $data->nama ?>">
               </div>
               <div class="form-group">
                  <label>Umur</label>
                  <input type="number" class="form-control" name="umur" value="<?php echo $data->umur ?>">
               </div>
               <div class="form-group">
                  <button class="btn btn-primary" name="aksi" value="ubah" type="submit">Ubah</button>
                  <a class="btn btn-info" href="index.php">Kembali</a>
               </div>
            </form>
         </div>
      </div>
   </div>
</body>
</html>
<?php include 'koneksi.php' ?><!doctype html>
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
            <form action="" method="post">
               <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" name="nama">
               </div>
               <div class="form-group">
                  <label>Umur</label>
                  <input type="number" class="form-control" name="umur">
               </div>
               <div class="form-group">
                  <button class="btn btn-primary" name="aksi" value="tambah" type="submit">Tambah</button>
               </div>
            </form>
         </div>
         <div class="col-md-8">
            <table class="table table-sm table-bordered">
               <thead>
                  <tr>
                     <th>No.</th>
                     <th>Nama</th>
                     <th>Umur</th>
                     <th>Aksi</th>
                  </tr>
               </thead>
               <tbody>
                  <?php foreach ($db->get() as $i => $row): ?>
                     <tr>
                        <td><?php echo ++$i ?></td>
                        <td><?php echo $row->nama ?></td>
                        <td><?php echo $row->umur ?></td>
                        <td>
                           <a href="edit.php?id=<?php echo $row->id ?>" class="btn btn-sm btn-warning">Ubah</a>
                           <a href="index.php?aksi=hapus&id=<?php echo $row->id ?>" class="btn btn-sm btn-danger" onclick="return confirm('Nan ra?')">Hapus</a>
                        </td>
                     </tr>
                  <?php endforeach ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</body>
</html>
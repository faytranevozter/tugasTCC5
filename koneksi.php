<?php
class Database {
   function __construct() {
      $this->con = new Mysqli("192.168.92.128", "elfay", "akusayangibu", "fahrur_rifai");
   }

   function get(){
      $q = $this->con->query("SELECT * FROM anggota_club");
      $res = [];
      if ($q->num_rows > 0) {
         while($r = $q->fetch_object()){
            $res[] = $r;
         }
      }
      return $res;
   }

   function detail($id) {
      $q = $this->con->query("SELECT * FROM anggota_club WHERE id = '{$id}'");
      if ($q->num_rows > 0) {
         return $q->fetch_object();
      } else {
         return FALSe;
      }
   }

   function insert($nama, $umur) {
      $this->con->query("INSERT INTO anggota_club(nama, umur) VALUES('{$nama}', '{$umur}')");
   }

   function update($nama, $umur, $id) {
      $this->con->query("UPDATE anggota_club SET nama = '{$nama}', umur = '{$umur}' WHERE id = '{$id}'");
   }

   function delete($id) {
      $this->con->query("DELETE FROM anggota_club WHERE id = '{$id}'");
   }
}

$db = new Database();

// tambah data
if (isset($_POST['aksi']) && $_POST['aksi']=='tambah') {
   $db->insert($_POST['nama'], $_POST['umur']);
   header('Location: index.php');
}

// hapus data
if (isset($_GET['aksi']) && $_GET['aksi']=='hapus') {
   $db->delete($_GET['id']);
   header('Location: index.php');
}

// ubah data
if (isset($_POST['aksi']) && $_POST['aksi']=='ubah') {
   $db->update($_POST['nama'], $_POST['umur'], $_GET['id']);
   header('Location: index.php');
}
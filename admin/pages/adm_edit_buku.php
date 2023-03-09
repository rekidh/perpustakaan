<?php
//for show input value 
$idbuku = $_GET['id'];
$sql = mysqli_query($connection, "SELECT * FROM `buku` WHERE `id_buku`='$idbuku'");
$result = mysqli_fetch_array($sql);
?>


<div class="col-lg-12 my-auto">
   <section class="panel col-md-10">
      <h2 class="alight-center center">Halaman Edit buku</h2>
      <a href="index.php?page=buku">Kembali ke Buku management </a>
      <form method="post" action="">
         <input type="text" name="id_buku" placeholder="id_buku" value="<?= $result['id_buku']; ?>" class="form-control">
         <br>
         <input type="text" name="judul" placeholder="judul" value="<?= $result['judul']; ?>" class="form-control">
         <br>
         <input type="text" name="kategori" placeholder="kategori" value="<?= $result['kategori']; ?>" class="form-control">
         <br>
         <input type="text" name="pengarang" placeholder="pengarang" value="<?= $result['pengarang']; ?>" class="form-control">
         <br>
         <input type="text" name="penerbit" placeholder="penerbit" value="<?= $result['penerbit']; ?>" class="form-control">
         <br>
         <select name="status" class="form-control">
            <option value="tersedia">Tersedia</option>
            <option value="dipinjam">Dipinjam</option>
         </select>
         <br>
         <input type="submit" name="edit_buku" value="Edit Buku" class="submit btn btn-success">
      </form>
   </section>
</div>

<?php
//update condition
if (isset($_POST['edit_buku'])) {
   var_dump($_POST);
   $id_buku = $_POST['id_buku'];
   $judul = $_POST['judul'];
   $kategori = $_POST['kategori'];
   $pengarang = $_POST['pengarang'];
   $penerbit = $_POST['penerbit'];
   $status = $_POST['status'];

   if (
      empty($id_buku) || empty($judul) ||
      empty($kategori) || empty($pengarang) ||
      empty($penerbit) || empty($status)
   ) {
      var_dump("kosong");
      echo "<div class='alert alert>data tidak boleh kosong !</div>";
   } else {
      var_dump('query');
      $id = $_GET['id'];
      $query = "UPDATE `buku`SET 
         `judul`='$judul',
         `kategori`='$kategori',
         `pengarang`='$pengarang',
         `penerbit`='$penerbit',
         `status`='$status'
         WHERE `id_buku`='$id'";
      $edit = mysqli_query($connection, $query);
      if ($edit) {
         echo "<div class='success'>berhasil</div>";
      } else {
         echo "<div class='error'>gagal</div>";
      }
   }
}
?>
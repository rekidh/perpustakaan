<?php

if (isset($_POST['submit_buku'])) {
   $id_buku = $_POST['id_buku'];
   $judul = $_POST['judul'];
   $kategori = $_POST['kategori'];
   $pengarang = $_POST['pengarang'];
   $penerbit = $_POST['penerbit'];
   $status = $_POST['status'];

   if (empty($id_buku) || empty($judul)) {
      echo "<div class='alert alert>data tidak boleh kosong !</div>";
   } else {
      $query  = "INSERT INTO buku(id_buku,judul,kategori,pengarang,penerbit,status) VALUES('$id_buku','$judul','$kategori','$pengarang','$penerbit','$status')";
      $insert = mysqli_query($connection, $query);
      if ($insert) {
         echo "<div>berhasil</div>";
      } else {
         echo "<div>Gagal</div>";
      }
   }
}
?>
<div class="col-lg-12 my-auto">
   <section class="panel col-md-10">
      <h2 align="center">Halaman Tambah buku</h2>
      <a href="index.php?page=buku">Kembali ke Buku management </a>

      <form method="post" action="">
         <input type="text" name="id_buku" placeholder="Id buku" class="form-control">
         <br>
         <input type="text" name="judul" placeholder="Judul buku" class="form-control">
         <br>
         <input type="text" name="kategori" placeholder="Kategori buku" class="form-control">
         <br>
         <input type="text" name="pengarang" placeholder="Pengarang buku" class="form-control">
         <br>
         <input type="text" name="penerbit" placeholder="Penerbit buku" class="form-control">
         <br>
         <select name="status" class="form-control">
            <option value="tersedia">Tersedia</option>
            <option value="dipinjam">Dipinjam</option>
         </select>
         <br>
         <input type="submit" name="submit_buku" value="Tambah buku" class="submit btn btn-success">
      </form>
   </section>
</div>
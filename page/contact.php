<?php
if (isset($_POST['submit_kontak'])) {

   $email = $_POST['email'];
   $nama = $_POST['nama'];
   $tanggal = $_POST['tanggal'];
   $pesan = $_POST['pesan'];

   if (empty($email) || empty($nama)) {
      echo '<div class="warning">Data tidak boleh kosong</div>';
   } else {
      $query = "INSERT INTO kontak (email, nama, tanggal, pesan) VALUES ('$email', '$nama', '$tanggal', '$pesan')";
      $insert = mysqli_query($connection, $query);
   }

   if ($insert) {
      echo '<div class="success">Kontak berhasil disimpan</div>';
   } else {
      echo '<div class="success">Kontak Gagal disimpan</div>';
   }
}
?>


<div class="pt-5 col-md-12  bg-primary">
   <div class="mx-auto">
      <section class="panel">
         <form action="" method="post">
            <input type="text" name="email" placeholder="Email" class="form-control"><br>
            <input type="date" name="tanggal" placeholder="Tanggal Kontak" class="form-control"><br>
            <input type="text" name="nama" placeholder="Nama Kontak" class="form-control"><br>
            <textarea name="pesan" class="form-control"></textarea><br>
            <input type="submit" name="submit_kontak" value="Submit" class="submit">
         </form>
      </section>
   </div>
</div>
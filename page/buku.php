<div class="mt-5">
   <div class="">
      <table class="table">
         <thead>
            <tr>
               <td>No</td>
               <td>Judul</td>
               <td>Pengarang</td>
               <td>penerbit</td>
               <td>Kategori</td>
               <td>Status</td>
            </tr>
         </thead>
         <tbody>
            <?php
            $no = 1;
            $sql = mysqli_query($connection, "SELECT * from buku");
            if ($sql) {
               while ($result = mysqli_fetch_array($sql)) {
            ?>
                  <tr>
                     <td><?= $no ?></td>
                     <td><?= $result["judul"] ?></td>
                     <td><?= $result["pengarang"] ?></td>
                     <td><?= $result["penerbit"] ?></td>
                     <td><?= $result["kategori"] ?></td>
                     <td><?= $result["status"] ?></td>
                  </tr>

            <?php
                  $no++;
               }
            }
            ?>
         </tbody>

      </table>
   </div>
</div>
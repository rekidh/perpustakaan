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
               <?php echo "<td> Action </td>";  ?>
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
                     <?php
                     if ($_GET['page'] == 'buku') {
                        $id_buku = $result['id_buku'];
                        echo "
                        <td> 
                           <a class='btn btn-warning' href='index.php?page=adm_edit_buku&id=$id_buku'>edit</a> 
                           <a class='btn btn-danger' href='index.php?page=adm_delete_buku&id=$id_buku'>hapus</a>
                        </td>
                        ";
                     }

                     ?>
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
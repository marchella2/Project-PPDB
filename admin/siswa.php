<?php
include "../config/koneksi.php";

if(isset($_GET['hapus'])){
  $sql = mysqli_query($konek, "DELETE FROM data_siswa WHERE no_pendaftaran = '$_GET[id]'");
}
?>
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
            </div>
            <div class="card-body">
            <br><br>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No Pendaftaran</th>
                      <th>Jalur Penerimaan</th>
                      <th>Nama Lengkap</th>
                      <th>Jenis Kelamin</th>
                      <th>Tempat Lahir</th>
                      <th>Tanggal Lahir</th>
                      <th>Agama</th>
                      <th>Alamat</th>
                      <th>Nomor Telpon</th>
                      <th>Email</th>
                      <th>Nama Ayah</th>
                      <th>Nama Ibu</th>
                      <th>Nama Wali</th>
                      <th colspan="2">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $sql = mysqli_query($konek, "SELECT * FROM data_siswa");
                      while($r=mysqli_fetch_array($sql)){
                     ?>
                     <tr>
                       <td><?php echo $r['no_pendaftaran'] ?></td>
                       <td><?php echo $r['penerimaan'] ?></td>
                       <td><?php echo $r['nama_lengkap'] ?></td>
                       <td><?php echo $r['jk'] ?></td>
                       <td><?php echo $r['tempat_lahir'] ?></td>
                       <td><?php echo $r['tanggal_lahir'] ?></td>
                       <td><?php echo $r['agama'] ?></td>
                       <td><?php echo $r['alamat'] ?></td>
                       <td><?php echo $r['no_telp'] ?></td>
                       <td><?php echo $r['email'] ?></td>
                       <td><?php echo $r['nama_ayah'] ?></td>
                       <td><?php echo $r['nama_ibu'] ?></td>
                       <td><?php echo $r['nama_wali'] ?></td>
                       <td><a class="btn btn-danger" href="?menu=siswa&hapus&id=<?php echo $r['no_pendaftaran'] ?>" onClick="return confirm('Anda Yakin?')">Hapus</a></td>
                     </tr>
                   <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

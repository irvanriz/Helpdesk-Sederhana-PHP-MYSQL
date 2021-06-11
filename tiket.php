<?php 
include("header.php"); // memanggil file header.php
include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
?>
	<div class="container">
		<div class="content">
			<h2>Data Tiket</h2>
			<hr />
			<a href="tambah_tiket.php">
                    <button type="button" class="btn btn-primary" name=""> <i class="fa fa-trash"></i> Tambah Tiket</button></a>
            <hr />
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<thead>
				<tr>
					<th>No</th>
					<th>No Tiket</th>
					<th>Nama</th>
					<th>Cabang</th>
					<th>Kategori</th>
					<th>Masalah</th>
					<th>Status</th>
					<th colspan="3">Action</th>
				</tr>
			</thead>
			<tbody>

			<?php 
			include 'koneksi.php';
			$halaman = 25;
			$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
			$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;

			$sql1 = "SELECT * FROM tiket group by id desc";
			$result = mysqli_query($link, $sql1);
			$total = mysqli_num_rows($result);

			$pages = ceil($total/$halaman);       

			$sql2 = "select tiket.id,no_tiket,nama,cabang.nama_cabang,kategori.nama_kategori,masalah,status from tiket INNER JOIN cabang on tiket.id_cabang = cabang.id INNER JOIN kategori on tiket.id_kategori = kategori.id order by no_tiket desc LIMIT $mulai, $halaman";
			$query = mysqli_query($link, $sql2);
			$no =$mulai+1;


			while ($mas = mysqli_fetch_array($query)) {
			?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $mas['no_tiket'] ?></td>
					<td><?php echo $mas['nama'] ?></td>
					<td><?php echo $mas['nama_cabang'] ?></td>
					<td><?php echo $mas['nama_kategori'] ?></td>
					<td><?php echo $mas['masalah'] ?></td>
					<td><?php echo $mas['status'] ?></td>
					<td>
					<?php
					if($mas['status'] == "Done") {

                        echo "";
					}
					else{
						?>
                    	<a href='respon_tiket.php?id=<?php echo $mas['id'] ?>' type='button' class='btn btn-warning btn-sm'>Respon</a>
					<?php } ?>
					
                  </td>
				</tr>
			  <?php               
  } 
  ?>
			</tbody>
				</table>
			</div> <!-- /.table-responsive -->
		</div> <!-- /.content -->
	</div> <!-- /.container -->
<?php 
include("footer.php"); // memanggil file footer.php
?>
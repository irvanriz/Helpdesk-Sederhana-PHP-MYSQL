<?php 
include("header.php"); // memanggil file header.php
include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
?>
	<div class="container">
		<div class="content">
			<h2>Data Cabang</h2>
			<hr />
			<a href="tambah_cabang.php">
                    <button type="button" class="btn btn-primary" name=""> <i class="fa fa-trash"></i> Tambah Cabang</button></a>
            <hr />
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<thead>
				<tr>
					<th>No</th>
					<th>Nama Cabang</th>
					<th colspan="3">Action</th>
				</tr>
			</thead>
			<tbody>

			<?php 
			include 'koneksi.php';
			$halaman = 25;
			$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
			$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
			//$query = mysqli_query("SELECT * FROM bk_problem LIMIT $mulai, $halaman");

			$sql1 = "SELECT * FROM cabang group by id desc";
			$result = mysqli_query($link, $sql1);
			$total = mysqli_num_rows($result);

			$pages = ceil($total/$halaman);       

			$sql2 = "select * from cabang group by id desc LIMIT $mulai, $halaman";
			$query = mysqli_query($link, $sql2);
			$no =$mulai+1;


			while ($mas = mysqli_fetch_array($query)) {
			?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $mas['nama_cabang'] ?></td>
					<td>
                    <a onclick="return confirm('Anda Yakin Menghapus Data Ini?')" href="aksi/delete_cabang.php?id=<?php echo $mas['id'] ?>">
                    <button type="button" class="btn btn-danger" name=""> <i class="fa fa-trash"></i> Hapus</button></a>
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
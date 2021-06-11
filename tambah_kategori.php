<?php 
include("header.php"); // memanggil file header.php
include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
?>
	<div class="container">
		<div class="content">
			<h2>Data Kategori &raquo; Tambah Data</h2>
			<hr />
			<form class="form-horizontal" action="aksi/tambah_kategori.php" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">Nama Kategori</label>
					<div class="col-sm-4">
						<input type="text" name="nama_kategori" class="form-control" placeholder="Nama Kategori" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="submit" class="btn btn-sm btn-primary" value="Simpan" data-toggle="tooltip" title="Simpan Data Cabang">
						<a href="kategori.php" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Batal">Batal</a>
					</div>
				</div>
			</form> <!-- /form -->
		</div> <!-- /.content -->
	</div> <!-- /.container -->
<?php 
include("footer.php"); // memanggil file footer.php
?>
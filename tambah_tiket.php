<?php 
include("header.php"); // memanggil file header.php
include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database

$query = mysqli_query($link, "SELECT max(no_tiket) as kodeTerbesar FROM tiket");
$data = mysqli_fetch_array($query);
$kodeBarang = $data['kodeTerbesar'];

$urutan = (int) substr($kodeBarang, 3, 3);

$urutan++;

$huruf = "JEC";
$kodeBarang = $huruf . sprintf("%03s", $urutan);
echo $kodeBarang;

?>
	<div class="container">
		<div class="content">
			<h2>Data Tiket &raquo; Tambah Data</h2>
			<hr />
			<form class="form-horizontal" action="aksi/tambah_tiket.php" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">Nomor Tiket</label>
					<div class="col-sm-4">
						<input type="text" name="no_tiket" class="form-control" placeholder="Nomor Tiket" value="<?php echo $kodeBarang ?>" readonly>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Tanggal Tiket</label>
					<div class="col-sm-4">
						<input type="date" name="tanggal_tiket" class="form-control" placeholder="Tanggal Tiket" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Cabang</label>
					<div class="col-sm-4">
					<select name="id_cabang" class="form-control" required>
						<option value=""> -- Pilih Cabang -- </option>
						<?php
							$cabang="select * from cabang";
							$hasil=mysqli_query($link,$cabang);
							while ($data = mysqli_fetch_array($hasil)) {
						?>
						<option value="<?php echo $data['id'];?>"><?php echo $data['nama_cabang'];?></option>
						  <?php 
							}
						  ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Kategori</label>
					<div class="col-sm-4">
						<select name="id_kategori" class="form-control" required>
							<option value=""> -- Pilih Kategori -- </option>
							<?php
							$kategori="select * from kategori";
							$hasil1=mysqli_query($link,$kategori);
							while ($data1 = mysqli_fetch_array($hasil1)) {
						?>
						<option value="<?php echo $data1['id'];?>"><?php echo $data1['nama_kategori'];?></option>
						  <?php 
							}
						  ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Nama</label>
					<div class="col-sm-4">
						<input type="text" name="nama" class="form-control" placeholder="Nama" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Masalah</label>
					<div class="col-sm-4">
						<input type="text" name="masalah" class="form-control" placeholder="Masalah" required>
					</div>
				</div>
				<div class="form-group">
                    <label class="col-sm-3 control-label">Gambar</label>
                    <div class="col-sm-4">
                        <input type="file" id="gambar" name="gambar" class="form-control">
                    </div>
                </div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Status</label>
					<div class="col-sm-4">
						<input type="text" name="status" class="form-control" value="On Proses" readonly>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="submit" class="btn btn-sm btn-primary" value="Simpan" data-toggle="tooltip" title="Simpan Data Cabang">
						<a href="tiket.php" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Batal">Batal</a>
					</div>
				</div>
			</form> <!-- /form -->
		</div> <!-- /.content -->
	</div> <!-- /.container -->
<?php 
include("footer.php"); // memanggil file footer.php
?>
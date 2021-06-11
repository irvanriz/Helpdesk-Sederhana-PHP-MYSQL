<?php
include("header.php"); // memanggil file header.php
include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
?>
	<div class="container">
		<div class="content">
			<h2>Data Tiket &raquo; Respon Tiket</h2>
			<hr />
			<?php 
					include "koneksi.php";
					$id = $_GET['id'];
					$query = "select tiket.id,no_tiket,tanggal_tiket,nama,cabang.nama_cabang,kategori.nama_kategori,masalah,gambar,status from tiket INNER JOIN cabang on tiket.id_cabang = cabang.id INNER JOIN kategori on tiket.id_kategori = kategori.id WHERE tiket.id='$id'" or die(mysql_error());
					$result = mysqli_query($link, $query);
					$nomor = 1;
					while($data = mysqli_fetch_array($result)){
					?>
			<form class="form-horizontal" action="aksi/respon_tiket.php" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">Nomor Tiket</label>
					<div class="col-sm-4">
						<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
						<input type="text" name="no_tiket" class="form-control" placeholder="Nomor Tiket" value="<?php echo $data['no_tiket'] ?>" readonly>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Tanggal Tiket</label>
					<div class="col-sm-4">
						<input type="date" name="tanggal_tiket" class="form-control" value="<?php echo $data['tanggal_tiket'] ?>" readonly>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Cabang</label>
					<div class="col-sm-4">
						<input type="text" name="id_cabang" class="form-control" value="<?php echo $data['nama_cabang'] ?>" readonly>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Kategori</label>
					<div class="col-sm-4">
						<input type="text" name="id_kategori" class="form-control" value="<?php echo $data['nama_kategori'] ?>" readonly>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Nama</label>
					<div class="col-sm-4">
						<input type="text" name="nama" class="form-control" value="<?php echo $data['nama'] ?>" readonly>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Masalah</label>
					<div class="col-sm-4">
						<input type="text" name="masalah" class="form-control" value="<?php echo $data['masalah'] ?>" readonly>
					</div>
				</div>
				<div class="form-group">
                    <label class="col-sm-3 control-label">Gambar</label>
                    <div class="col-sm-4">
                        <input type="text" id="gambar" name="gambar" class="form-control" value="<?php echo $data['gambar'] ?>" readonly>
                    </div>
                </div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Status</label>
					<div class="col-sm-4">
						<select name="status" class="form-control" required>
							<option value="<?php echo $data['status'] ?>"> <?php echo $data['status'] ?> </option>
							<option value="Done">Done</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Tanggal Respon</label>
					<div class="col-sm-4">
						<input type="date" name="tanggal_respon" class="form-control" placeholder="Tanggal Respon" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">User</label>
					<div class="col-sm-4">
					<select name="id_pengguna" class="form-control" required>
						<option value=""> -- Pilih User -- </option>
						<?php
							$pengguna="select * from pengguna";
							$hasil=mysqli_query($link,$pengguna);
							while ($data = mysqli_fetch_array($hasil)) {
						?>
						<option value="<?php echo $data['id'];?>"><?php echo $data['nama_pengguna'];?></option>
						  <?php 
							}
						  ?>
						</select>
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
			<?php } ?>
		</div> <!-- /.content -->
	</div> <!-- /.container -->
<?php 
include("footer.php"); // memanggil file footer.php
?>
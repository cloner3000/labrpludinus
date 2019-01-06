<h2>TABEL KLINIK</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>no</th>
			<th>nama kegiatan</th>
			<th>tanggal</th>
			<th>peserta</th>
			<th>waktu</th>
			<th>tempat</th>
			<th>aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php  $nomor = 1; ?>
		<?php 
			$ambil=$koneksi->query("SELECT * FROM klinik");
		?>
		<?php 
			while($pecah=mysqli_fetch_assoc($ambil)){ 
		?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_kegiatan']; ?></td>
			<td><?php echo $pecah['tanggal']; ?></td>
			<td><?php echo $pecah['peserta']; ?></td>
			<td><?php echo $pecah['waktu']; ?></td>
			<td><?php echo $pecah['tempat']; ?></td>
			<td>
				<a href="proses-delete-klinik.php?id=<?php echo $pecah['id'] ?>" class="btn-danger btn">Hapus</a>
				<a href="form-update-klinik.php?id=<?php echo $pecah['id'] ?>" class="btn-warning btn">Update</a>
				<a href="" data-toggle="modal" data-target="#create" class="btn-success btn">Create</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>

<!--CREATE-->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width: 80%" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Create</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<form action="proses-create-klinik.php" method="post">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Nama Kegiatan</label>
			    <input type="text" class="form-control" name="nama_kegiatan" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Kegiatan">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Tanggal</label>
			    <input type="date" class="form-control" name="tanggal" id="exampleInputPassword1" placeholder="Tanggal">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Peserta</label>
			    <input type="text" class="form-control" name="peserta" id="exampleInputPassword1" placeholder="Peserta">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Waktu</label>
			    <input type="text" class="form-control" name="waktu" id="exampleInputPassword1" placeholder="Waktu">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Tempat</label>
			    <input type="text" class="form-control" name="tempat" id="exampleInputPassword1" placeholder="Tempat">
			  </div>
			  <div class="form-group form-check">
			    <input type="checkbox" class="form-check-input" id="exampleCheck1">
			    <label class="form-check-label" for="exampleCheck1">Check me out</label>
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>
<h2>TABEL MAHASISWA</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>no</th>
			<th>nama</th>
			<th>tempat, tanggal lahir</th>
			<th>jurusan</th>
			<th>nim</th>
			<th>email</th>
			<th>aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php  $nomor = 1; ?>
		<?php 
			$ambil=$koneksi->query("SELECT * FROM mahasiswa");
		?>
		<?php 
			while($pecah=mysqli_fetch_assoc($ambil)){ 
		?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama']; ?></td>
			<td><?php echo $pecah['tempat_tgl_lahir']; ?></td>
			<td><?php echo $pecah['jurusan']; ?></td>
			<td><?php echo $pecah['nim']; ?></td>
			<td><?php echo $pecah['email']; ?></td>
			<td>
				<a href="proses-delete-mahasiswa.php?id=<?php echo $pecah['id'] ?>" class="btn-danger btn">Hapus</a>
				<a href="form-update-mahasiswa.php?id=<?php echo $pecah['id'] ?>" class="btn-warning btn">Update</a>
				<a href="" class="btn-success btn" data-toggle="modal" data-target="#create">Create</a>
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
			<form action="proses-create-mahasiswa.php" method="post">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Nama</label>
			    <input type="text" class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter nama">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Tempat, Tanggal Lahir</label>
			    <input type="text" class="form-control" name="tempat_tgl_lahir" id="exampleInputPassword1" placeholder="Tempat, Tanggal Lahir">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Jurusan</label>
			    <input type="text" class="form-control" name="jurusan" id="exampleInputPassword1" placeholder="Jurusan">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">NIM</label>
			    <input type="text" class="form-control" name="nim" id="exampleInputPassword1" placeholder="NIM">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Email</label>
			    <input type="email" class="form-control" name="email" id="exampleInputPassword1" placeholder="Email">
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

<h2>TABEL MATERI</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>no</th>
			<th>judul</th>
			<th>tanggal</th>
			<th>isi</th>
			<th>aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php  $nomor = 1; ?>
		<?php 
			$ambil=$koneksi->query("SELECT * FROM materi");
		?>
		<?php 
			while($pecah=mysqli_fetch_assoc($ambil)){ 
		?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['judul']; ?></td>
			<td><?php echo $pecah['tanggal']; ?></td>
			<td><?php echo $pecah['isi']; ?></td>
			<td>
				<a href="proses-delete-materi.php?id=<?php echo $pecah['id'] ?>" class="btn-danger btn">Hapus</a>
				<a href="form-update-materi.php?id=<?php echo $pecah['id'] ?>" class="btn-warning btn">Update</a>
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
			<form action="proses-create-materi.php" method="post">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Judul</label>
			    <input type="text" class="form-control" name="judul" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Judul">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Tanggal</label>
			    <input type="date" class="form-control" class="text-center" name="tanggal" id="exampleInputPassword1" placeholder="Tanggal">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlTextarea1">Isi</label>
			    <textarea class="form-control" name="isi" id="exampleFormControlTextarea1" rows="3" placeholder="Isi"></textarea>
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
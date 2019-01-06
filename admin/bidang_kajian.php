<h2>TABEL BIDANG KAJIAN</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>no</th>
			<th>tahun</th>
			<th>bidang kajian</th>
			<th>aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php  $nomor = 1; ?>
		<?php 
			$ambil=$koneksi->query("SELECT * FROM bidang_kajian");
		?>
		<?php 
			while($pecah=mysqli_fetch_assoc($ambil)){ 
		?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['tahun']; ?></td>
			<td><?php echo $pecah['bidang_kajian']; ?></td>
			<td>
				<a href="proses-delete-bidang_kajian.php?id=<?php echo $pecah['id'] ?>" class="btn-danger btn">Hapus</a>
				<a href="form-update-bidang_kajian.php?id=<?php echo $pecah['id'] ?>" class="btn-warning btn" id="update" data-target="#update">Update</a>
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
			<form action="proses-create-bidang_kajian.php" method="post" enctype="multipart/form-data">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Tahun</label>
			    <input type="text" class="form-control" name="tahun" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tahun">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Bidang Kajian</label>
			    <input type="text" class="form-control" name="bidang_kajian" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Bidang Kajian">
			  </div>
			  <div class="form-group form-check">
			    <input type="checkbox" class="form-check-input" id="exampleCheck1">
			    <label class="form-check-label" for="exampleCheck1">Check me out</label>
			  </div>
			  <input type="submit" class="btn btn-primary" name="submit" value="Submit">
			</form>
		</div>
	</div>
</div>
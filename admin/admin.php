

<h2>TABEL USER</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>no</th>
			<th>email</th>
			<th>password</th>
			<th>aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php  $nomor = 1; ?>
		<?php 
			$ambil=$koneksi->query("SELECT * FROM admin");
		?>
		<?php 
			while($pecah=mysqli_fetch_assoc($ambil)){ 
		?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['email']; ?></td>
			<td><?php echo $pecah['password']; ?></td>
			<td>
				<a href="" class="btn-danger btn">Hapus</a>
				<a href="" class="btn-warning btn">Update</a>
				<a href="" class="btn-success btn">Create</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>
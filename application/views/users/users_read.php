<body>

	<h2 style="margin-top:0px">Users Read</h2>

	<table class="table">
		<tr>
			<td>Username</td>
			<td><?= $username; ?></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><?= $nama; ?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><?= $email; ?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><?= $alamat; ?></td>
		</tr>
		<tr>
			<td>Kota</td>
			<td><?= $kota; ?></td>
		</tr>
		<tr>
			<td>Provinsi</td>
			<td><?= $provinsi; ?></td>
		</tr>
		<tr>
			<td>Telepon</td>
			<td><?= $telepon; ?></td>
		</tr>

		<?php if ($id_level==1) { ?>
			<tr><td>Id Level</td><td><?= 'Admin'?></td></tr>
		<?php  }else { ?>
			<tr><td>Id Level</td><td><?= 'User'?></td></tr>
		<?php } ?>
		<?php if ($is_aktive==1) { ?>
			<tr><td>Is Aktive</td><td><?= 'Aktive'?></td></tr>
		<?php  }else { ?>
			<tr><td>Is Aktive</td><td><?= 'Non Aktive'?></td></tr>
		<?php } ?>

		<tr>
			<td>Create Date</td>
			<td><?= $create_date; ?></td>
		</tr>
		<tr>
			<td></td>
			<td><a href="<?= site_url('users') ?>" class="btn btn-default">Cancel</a></td>
		</tr>
	</table>

</body>
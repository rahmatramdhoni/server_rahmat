<div class="box-body">
<div class="col-lg-6">
	<a href="<?php echo base_url(); ?>index.php/crud/v_insert" class="btn btn-default"><i class="fa fa-plus"></i> TAMBAH DATA</a>
	<table class="table table-bordered table-striped" id="example1">
		<thead>
			<tr>
				<th>No</th>
				<th>Username</th>
				<th>Password</th>
				<th>Opsi</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			foreach ($login->result() as $key) { ?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $key->username; ?></td>
					<td><?php echo $key->password; ?></td>
					<td>
					<a href="<?php echo base_url(); ?>index.php/crud/delete/<?php echo $key->id; ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
					<a href="<?php echo base_url(); ?>index.php/crud/v_update/<?php echo $key->id; ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
					</td>
				</tr>
			<?php }
			?>
		</tbody>
	</table>
</div>
</div>
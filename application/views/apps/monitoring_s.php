
<div class="box-body">
<div class="col-lg-6">
	<h1>Sensor 1</h1>
           <table id="example1" class="table table-bordered table-striped">
           	<thead>
           		<th>Tanggal</th>
           		<th>Nilai</th>
           		<th>Status</th>
           	</thead>
           	<tbody>
           	<?php
           	foreach ($isi1->result() as $key) { ?>
           		
           		<tr>
           			<td><?php echo $key->tgl_update; ?></td>
           			<td><?php echo $key->nilai; ?></td>
           			<td><?php echo $key->status; ?></td>
           			
           			
           		</tr>
           	<?php }
           	?>
           		
           	</tbody>
           </table>
</div>
<div class="col-lg-6">
	<h1>Sensor 2</h1>
           <table id="example2" class="table table-bordered table-striped">
           	<thead>
           		<th>Tanggal</th>
           		<th>Nilai</th>
           		<th>Status</th>
           	</thead>
           	<tbody>
           		<?php
           	foreach ($isi2->result() as $key) { ?>
           		
           		<tr>
           			<td><?php echo $key->tgl_update; ?></td>
           			<td><?php echo $key->nilai; ?></td>
           			<td><?php echo $key->status; ?></td>
           			
           			
           		</tr>
           	<?php }
           	?>
           		
           	</tbody>
           </table>
</div>


</div>
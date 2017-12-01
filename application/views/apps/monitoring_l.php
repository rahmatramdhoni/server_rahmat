
<div class="box-body">
<div class="col-lg-6">
	<h1>Lantai 1</h1>


  <a href="<?php echo base_url(); ?>index.php/Apps/off_lantai1/" class="btn btn-danger"><i class="fa fa-lightbulb-o"></i> Matikan Semua Lampu Di Lantai 1</a>
  <a href="<?php echo base_url(); ?>index.php/Apps/on_lantai1/" class="btn btn-success"><i class="fa fa-lightbulb-o"></i> Nyalakan Semua Lampu Di Lantai 1</a>
           <table id="example1" class="table table-bordered table-striped">
           	<thead>
           		<th>Lampu</th>
           		<th>Lokasi</th>
           		<th>Status</th>
           		<th>Date Time</th>
           	</thead>
           	<tbody>
           	<?php
           	foreach ($isi1->result() as $key) { ?>
           		
           		<tr>
           			<td><?php echo $key->nama_lampu; ?></td>
           			<td><?php echo $key->lokasi; ?></td>
           			<td><?php
           			if ($key->state == 1 ) {
                $nilai=1; ?>
           				<p class="text-green"><i class="fa fa-lightbulb-o"> ON</i></p>
           			<?php } else { 
                 $nilai=0;?>
           				<p class="text-red"><i class="fa fa-lightbulb-o"> OFF</i></p>
           			<?php }
           			
           			?></td>
           			<td><?php echo $key->datetime; ?></td>
           			<td> 
                <?php if ($key->state==1) { ?>
                  <a href="<?php echo base_url(); ?>index.php/Apps/off/<?php echo $key->id; ?>" class="btn btn-success"><i class="fa fa-lightbulb-o"></i></a>
                <?php } else { ?>
                  <a href="<?php echo base_url(); ?>index.php/Apps/on/<?php echo $key->id; ?>" class="btn btn-danger"><i class="fa fa-lightbulb-o"></i></a>
                <?php  }
                 ?>
           			</td>
           		</tr>

           	<?php echo $nilai; }

           	?>
           		
           	</tbody>
           </table>
           
</div>
<div class="col-lg-6">
	<h1>Lantai 2</h1>
  <a href="<?php echo base_url(); ?>index.php/Apps/off_lantai2/" class="btn btn-danger"><i class="fa fa-lightbulb-o"></i> Matikan Semua Lampu Di Lantai 2</a>
  <a href="<?php echo base_url(); ?>index.php/Apps/on_lantai2/" class="btn btn-success"><i class="fa fa-lightbulb-o"></i> Nyalakan Semua Lampu Di Lantai 2</a>
           <table id="example2" class="table table-bordered table-striped">
           	<thead>
           		<th>Lampu</th>
           		<th>Lokasi</th>
           		<th>Status</th>
           		<th>Date Time</th>
           	</thead>
           	<tbody>
           		<?php
           	foreach ($isi2->result() as $key) { ?>
           		
           		<tr>
           			<td><?php echo $key->nama_lampu; ?></td>
           			<td><?php echo $key->lokasi; ?></td>
           			<td><?php
           			if ($key->state == 1 ) { ?>
           				<p class="text-green"><i class="fa fa-lightbulb-o"> ON</i></p>
           			<?php } else { ?>
           				<p class="text-red"><i class="fa fa-lightbulb-o"> OFF</i></p>
           			<?php }
           			
           			?></td>
           			<td><?php echo $key->datetime; ?></td>
           			<td> 
                <?php if ($key->state==1) { ?>
                  <a href="<?php echo base_url(); ?>index.php/Apps/off/<?php echo $key->id; ?>" class="btn btn-success"><i class="fa fa-lightbulb-o"></i></a>
                <?php } else { ?>
                  <a href="<?php echo base_url(); ?>index.php/Apps/on/<?php echo $key->id; ?>" class="btn btn-danger"><i class="fa fa-lightbulb-o"></i></a>
                <?php }
                 ?>
                </td>
           		</tr>
           	<?php }
           	?>
           		
           	</tbody>
           </table>
</div>


</div>
<div class="box-body">
<div class="col-lg-6">
	
	<form action="<?php echo base_url(); ?>index.php/crud/update" method="POST">
		<div class="form-group">
			<label>Username</label>
			<input type="hidden" name="id" class="form-control" value="<?php echo $id; ?>">
			<input type="text" name="us" class="form-control" value="<?php echo $username; ?>">
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="Password" name="ps" class="form-control" required="">
		</div>
		<div class="form-group">
			<button type="submit" name="submit" value="INSERT" class="btn btn-primary"><i class="fa fa-plus"></i> UPDATE</button>
			<button type="reset" class="btn btn-danger"><i class="fa fa-reply"></i> RESET</button>
		</div>
	</form>
</div>
</div>
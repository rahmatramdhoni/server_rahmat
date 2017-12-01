<div class="box-body">
<div class="col-lg-6">
	<span id="notif">
                            </span>
	<form action="<?php echo base_url(); ?>index.php/Crud/insert" method="POST">
		<div class="form-group">
			<label>Username</label>
			<input type="text" name="us" id="us" class="form-control">
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="Password" name="ps" id="ps" class="form-control">
		</div>
		<div class="form-group">
			<button type="submit" value="INSERT" class="btn btn-primary" onclick="return cek();"><i class="fa fa-plus"></i> INSERT</button>
			<button type="reset" class="btn btn-danger" ><i class="fa fa-reply"></i> RESET</button>
		</div>
	</form>
</div>
</div>

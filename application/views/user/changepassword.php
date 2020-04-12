      <!-- Begin Page Content -->
      <div class="container-fluid">

      	<!-- Page Heading -->

      	<div class="row">
      		<div class="col-lg-5">
      			<?= $this->session->flashdata('message'); ?>
      			<form method="post" action="<?= base_url('user/changepassword'); ?>">
      				<div class="form-group">
      					<label for="current_password">Current Password</label>
      					<input type="password" class="form-control" id="current_password" name="current_password">
      					<?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
      				</div>
      				<div class="form-group">
      					<label for="new_password1">New Password</label>
      					<input type="password" class="form-control" id="new_password1" name="new_password1">
      					<?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
      				</div>
      				<div class="form-group">
      					<label for="new_password2">Repeat Password</label>
      					<input type="password" class="form-control" id="new_password2" name="new_password2">
      					<?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
      				</div>
      				<div class="form-group">
      					<a class="btn btn-danger" href="<?= base_url('user'); ?>"><i class="fas fa-arrow-left"></i> Back</a> |
      					<button type="submit" class="btn btn-primary"><i class="fas fa-key"></i> Change</button>
      				</div>
      			</form>
      		</div>
      	</div>
      </div>
      <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->
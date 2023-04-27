


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="my-5 py-4">
				<div class="float-start">
					<h3>Create Employee</h3>
				</div>
				<div class="float-end">
					<a href="<?php echo base_url('employee'); ?>" class="btn btn-primary btn-sm">Employee List</a>
				</div>
			</div>

			<div class="card">
				<div class="card-body">

					<form action="<?php  echo base_url('employee/store'); ?>" method="POST">

						<div class="mb-3">
							<label class="form-label">Name</label>
							<input name="name" type="text" class="form-control" placeholder="Name">
							<small class="text-danger"><?php echo form_error('name'); ?></small>
						</div>

						<div class="mb-3">
							<label class="form-label">Email</label>
							<input name="email" type="email" class="form-control" placeholder="Email">
							<small class="text-danger"><?php echo form_error('email'); ?></small>
						</div>

						<div class="mb-3">
							<label class="form-label">Phone</label>
							<input name="phone" type="number" class="form-control" placeholder="Phone">
							<small class="text-danger"><?php echo form_error('phone'); ?></small>
						</div>

						<button type="submit" class="btn btn-primary mb-3">Submit</button>
					</form>

				</div>
			</div>

		</div>
	</div>
</div>

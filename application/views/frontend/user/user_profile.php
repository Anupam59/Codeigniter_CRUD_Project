
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="my-5 py-4">
				<div class="float-start">
					<h3>User Profile Page</h3>
				</div>
			</div>


			<?php if ($this->session->flashdata('status')) : ?>
				<div class="alert alert-success">
					<?= $this->session->flashdata('status'); ?>
				</div>
			<?php endif; ?>


			<div class="card">
				<div class="card-body">
					<div class="mb-3">
						<label class="form-label">Name</label>
						<input type="text" value="<?php echo $this->session->userdata('auth_user')['name']; ?>" class="form-control" placeholder="Name" readonly>
					</div>

					<div class="mb-3">
						<label class="form-label">Email</label>
						<input type="text" value="<?php echo $this->session->userdata('auth_user')['email']; ?>" class="form-control" placeholder="Name" readonly>
					</div>

					<div class="mb-3">
						<label class="form-label">Phone</label>
						<input type="text" value="<?php echo $this->session->userdata('auth_user')['phone']; ?>" class="form-control" placeholder="Name" readonly>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>


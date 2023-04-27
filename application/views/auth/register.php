
<style>
	.gradient-custom {
		/* fallback for old browsers */
		background: #f093fb;

		/* Chrome 10-25, Safari 5.1-6 */
		background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));

		/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))
	}

	.card-registration .select-input.form-control[readonly]:not([disabled]) {
		font-size: 1rem;
		line-height: 2.15;
		padding-left: .75em;
		padding-right: .75em;
	}
	.card-registration .select-arrow {
		top: 13px;
	}
</style>



<section class="vh-200 gradient-custom">
	<div class="container py-5 h-200">
		<div class="row justify-content-center align-items-center h-200">
			<div class="col-12 col-lg-9 col-xl-7">
				<div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
					<div class="card-body p-4 p-md-5">
						<h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
						<form action="<?php  echo base_url('register'); ?>" method="POST">
							<div class="row">
								<div class="col-md-12 mb-4">
									<div class="form-outline">
										<label class="form-label" for="name">Name</label>
										<input type="text" name="name" id="name" class="form-control form-control-lg" value="<?php echo set_value('name'); ?>"/>
										<small class="text-danger"><?php echo form_error('name'); ?></small>
									</div>

									<div class="form-outline">
										<label class="form-label" for="email">Email</label>
										<input type="email" name="email" id="email" class="form-control form-control-lg" value="<?php echo set_value('email'); ?>"/>
										<small class="text-danger"><?php echo form_error('email'); ?></small>
									</div>

									<div class="form-outline">
										<label class="form-label" for="phone">Phone</label>
										<input type="tel" name="phone" id="phone" class="form-control form-control-lg" value="<?php echo set_value('phone'); ?>"/>
										<small class="text-danger"><?php echo form_error('phone'); ?></small>
									</div>

								</div>
							</div>

							<div class="row">
								<div class="col-md-6 mb-4">
									<div class="form-outline">
										<label class="form-label" for="password">Password</label>
										<input type="password" name="password" id="password" class="form-control form-control-lg" value="<?php echo set_value('password'); ?>"/>
										<small class="text-danger"><?php echo form_error('password'); ?></small>
									</div>
								</div>

								<div class="col-md-6 mb-4">
									<div class="form-outline">
										<label class="form-label" for="confirm_password">Confirm Password</label>
										<input type="password" name="confirm_password" id="confirm_password" class="form-control form-control-lg" value="<?php echo set_value('confirm_password'); ?>"/>
										<small class="text-danger"><?php echo form_error('confirm_password'); ?></small>
									</div>

								</div>
							</div>

							<div class="mt-4 pt-2">
								<input class="btn btn-primary btn-lg" type="submit" value="Registration" />
								<a href="<?php echo base_url('login');?>"><small class="text-danger">Go to Login Page</small></a>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

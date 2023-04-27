

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="my-5 py-4">
				<div class="float-start">
					<h3>This Employee Table List</h3>
				</div>
				<div class="float-end">
					<a href="<?php echo base_url('employee/create'); ?>" class="btn btn-primary btn-sm">Add Employee</a>
				</div>
			</div>
			<form action="<?= base_url('employee') ?>" method="get">
				<div class="row g-3 align-items-center">
					<div class="col-auto">
						<label for="search_text" class="col-form-label">Search</label>
					</div>
					<div class="col-auto">
						<input type="text" placeholder="Search here" value="<?php if($this->input->get('search_text')){echo $this->input->get('search_text');}?>" id="search_text" name="search_text" class="form-control" aria-describedby="">
					</div>
					<div class="col-auto">
						<input type="submit" class="btn btn-primary" value="Search" >
					</div>
				</div>
			</form>
			<table class="table">
				<thead>
				<tr>
					<th scope="col">SL</th>
					<th scope="col">Name</th>
					<th scope="col">Email</th>
					<th scope="col">Phone</th>
					<th scope="col">Edit</th>
					<th scope="col">Delete</th>
				</tr>
				</thead>
				<tbody>

				<?php
				foreach ($employee as $key => $row):
				?>
					<tr>
						<th scope="row"><?php echo $key+1;?></th>
						<td><?php echo $row['name'] ?></td>
						<td><?php echo $row['email']?></td>
						<td><?php echo $row['phone']?></td>
						<td><a href="<?php echo base_url('employee/edit/'.$row['id']);?>" class="btn btn-primary btn-sm">Edit</a></td>
						<td><a href="<?php echo base_url('employee/delete/'.$row['id']);?>" class="btn btn-danger btn-sm">Delete</a></td>
					</tr>
				<?php
				endforeach;
				?>

				</tbody>
			</table>
		</div>
	</div>
	<div class="d-flex justify-content-center">
		<?=$links?>
	</div>
</div>

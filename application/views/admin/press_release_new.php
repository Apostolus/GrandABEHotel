<section id="content">
<div class="container">
	<div class="row">
		<div class="col-md-12">
		<h1 align="left">New Press Relase</h1>
		<br><br>
			<?php echo form_open_multipart('admin/press_release/submit'); ?>
				<table class="table table" id="form">
					<tr>
						<td>Title</td>
						<td><input type="text" id="title" name="title" class="form-control"></td>
					</tr>
					<tr>
						<td>Content</td>
						<td><textarea name="content" id="content" class="form-control"></textarea></td>
					</tr>
					<tr>
						<td>Image</td>
						<td><input type="file" name="image" class="form-control"></td>
					</tr>
					<tr>
						<td colspan="2">
							<input type="submit" value="Create New" class="btn btn-primary pull-right">
						</td>
					</tr>
				</table>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>
</section>
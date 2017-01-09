<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/jqc-1.12.4/dt-1.10.13/af-2.1.3/fh-3.1.2/r-2.1.0/sc-1.4.2/se-1.2.0/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/jqc-1.12.4/dt-1.10.13/af-2.1.3/fh-3.1.2/r-2.1.0/sc-1.4.2/se-1.2.0/datatables.min.js"></script>

<section id="content">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="button-press pull-left">
				<a href="<?php echo base_url() ?>admin/press_release/new" class="btn btn-primary">Create New</a>
			</div>
			<br><br>
			<table class="table table-bordered" id="table_one">
			<thead>
				<tr>
					<td>ID</td>
					<td>Title</td>
					<td>Date Posted</td>
					<td>Content</td>
					<td>Image</td>
					<td>Action</td>
				</tr>   
			</thead>
			<tbody>
				<?php if($posts != ''): ?>
					<?php foreach($posts as $post): ?>
						<tr>
							<td><?php echo $post->id ?></td>
							<td><?php echo $post->title ?></td>
							<td><?php echo date('d-m-Y',strtotime($post->date_posted)) ?></td>
							<td><?php echo $post->home_content ?></td>
							<td><img src="<?php echo $post->image; ?>"></td>
							<td>
								<a href="<?php echo base_url() ?>admin/press_release/edit/<?php echo $post->id ?>" class="btn btn-primary">Edit</a>
								<a href="<?php echo base_url() ?>admin/press_release/delete/<?php echo $post->id ?>" class="btn btn-danger">Delete</a>
							</td>
						</tr> 
					<?php endforeach; ?>
				<?php else: ?>
					<tr>
						<td colspan="4">There's No Press Release</td>
					</tr>
				<?php endif; ?>
			</tbody>
			</table>
		</div>
	</div>
</div>
</section>

<?php if($this->session->flashdata('success')): ?>

	<script>
		swal({
		  title: "Error!",
		  text: "<?php echo $this->session->flashdata("success") ?>",
		  type: "error",
		  confirmButtonText: "Cool"
		});
	</script>

<?php elseif($this->session->flashdata('error')): ?>

	<script>
		swal({
		  title: "Error!",
		  text: "Here's my error message!",
		  type: "error",
		  confirmButtonText: "Cool"
		});
	</script>

<?php endif; ?>

<script>

$(document).ready( function () {
    $('#table_one').DataTable({
      responsive:true,
      "lengthMenu": [[10, 25, 50, 100, 250, 400, -1], [10, 25, 50, 100, 250, 400, "All"]]
    });
} );

</script>
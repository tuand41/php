<?php require_once 'head.php';?>
<div class="container mt-5">
	<button class = "btn btn-primary" data-toggle="modal" data-target="#addModal">Add</button>
	<table class="table">
		<thead>
			<tr>
				<th>id</th>
				<th>title</th>
				<th>description</th>
				<th>image</th>
				<th>created_at</th>
				<th>tuy chon</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ( $news as $new ) { ?>
				<tr>
					<td><?php echo $new->id ?></td>
					<td><?php echo $new->title ?></td>
					<td><?php echo $new->description ?></td>
					<td><?php echo $new->image ?></td>
					<td><?php echo $new->create_at ?></td>
					<td>
						<button class="btn btn-primary" data-toggle="modal" data-target="#editModal"><i class="fas fa-edit"></i></button>
						<button class="btn btn-primary">
							<a href=""><i style="color: white;" class="far fa-trash-alt"></i></a>
						</button>	
					</td>
				</tr>    
			<?php }?>
		</tbody>
	</table>
</div>
<?php require_once 'footer.php';?>
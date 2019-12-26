<?php require_once 'add.php';?>

<div class="container mt-5">
	<button class = "btn btn-primary" data-toggle="modal" data-target="#addModal">Add</button>
    <?php while ( $list = $lists->fetch_assoc()) { ?>
	<div class="row mt-4">
		<div class="col-4">
            <img width="100%" src='public/images/<?php echo $list["image"]; ?>'>
		</div>
		<div class="col-6">
            <h4><?php echo $list['title'] ?></h4>            
            <span><?php echo $list['created_at'] ?></span>        
            <p><?php echo $list['description'] ?></p>              
		</div>
        <div class="col-2">
        <a class="btn btn-primary mx-1 text-white" href="?action=edit&id=<?php echo $list['id']; ?>">edit</ >
                <a class="btn btn-primary mx-1 text-white" href="?action=delete&id=<?php echo $list['id']; ?>">delete</a>
        </div>
	</div>
    <?php } ?>
</div>
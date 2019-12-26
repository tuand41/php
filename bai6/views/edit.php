<div class="container mt-5">
    <form action="?action=update&id=<?php echo $detail['id']; ?>" method = "POST" enctype="multipart/form-data" class="col-8">
        <div class="form-group">
            <input type="hidden" name="id" value=""/>
            <label>title</label>
            <input type="text" class="form-control" name="title" placeholder="title" value="<?php echo $detail['title']; ?>" id="title">
        </div>
        <div class="form-group">
            <label>description:</label>
            <input type="text" class="form-control" placeholder="des"
             name="description" id="description" value="<?php echo $detail['id']; ?>" >
        </div>
        <div class="form-group">
            <img src="public/images/<?php echo $detail['image']; ?>" alt="new image" id="image-default">
            <input type="file" class="form-control" name="image" style="display:none"
                onchange="changeImg(this)" value="<?php echo $detail['id']; ?>" id="image">
        </div>
        <button type="submit" name="btnEdit" id="btnEdit" class="btn btn-primary">Edit</button>
    </form>
</div>

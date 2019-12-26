<div class="modal" id="addModal">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Add</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <form action="?action=add" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>title</label>
                    <input type="text" class="form-control" placeholder="title" name="title" id="title">
                </div>
                <div class="form-group">
                    <label>description:</label>
                    <input type="text" class="form-control" placeholder="description" id="description" name="description">
                </div>
                <div class="form-group">
                    <img src="public/images/default.png" alt="new image" width="300px" id="image-default">
                    <input type="file" class="form-control" name="image" style="display: none;"
                        onchange="changeImg(this)" id="image">
                </div>
                <button type="submit" name="btnAdd" id="btnAdd" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
  </div>
</div>
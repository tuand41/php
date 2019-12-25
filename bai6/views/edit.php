<div class="modal" id="editModal">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Edit</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <form action="?controller=new&action=edit" method = "POST" id="form_edit">
                <div class="form-group">
                    <label>title</label>
                    <input type="text" class="form-control" placeholder="title" id="title">
                </div>
                <div class="form-group">
                    <label>description:</label>
                    <input type="text" class="form-control" placeholder="des" id="description">
                </div>
                <div class="form-group">
                    <label>image:</label>
                    <input type="file" class="form-control" placeholder="Enter password" id="image">
                </div>
                <button type="submit" id="btnEdit" class="btn btn-primary">Edit</button>
            </form>
        </div>
        

    </div>
  </div>
</div>
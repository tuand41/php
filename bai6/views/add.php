<div class="modal" id="addModal">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Add</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <form action="?controller=new&action=add" method = "POST" id="form_add">
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
                    <input type="file" class="form-control" id="image">
                </div>
                <button type="submit" id="btnAdd" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
  </div>
</div>
<!-- Edit Modal HTML -->
<div class="modal fade" id="editTaskModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="frmEditTask">
                <div class="modal-header">
                    <h4 class="modal-title">
                        Sửa Số lượng phòng
                    </h4>
                    <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                        ×
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger" id="edit-error-bag">
                        <ul id="edit-task-errors">
                        </ul>
                    </div>
                    <div class="form-group">
                        <label>
                            Room
                        </label>
                        <input class="form-control" id="task" name="task" required="" type="text" disabled="">
                        </input>
                    </div>
                    <div class="form-group">
                        <div class="input-group"> 
                            <span class="input-group-btn"> 
                                <button type="button" class="btn btn-danger btn-number form-control" data-type="minus" data-field="soluong"> 
                                   <i class="fa fa-minus" aria-hidden="true"></i>
                                </button>
                            </span> 
                            <input name="soluong" class="form-control input-number form-control" value="1" min="1" max="10" type="text" id="soluong"> 
                            <span class="input-group-btn">    
                                <button type="button" class="btn btn-success btn-number form-control" data-type="plus" data-field="soluong"> 
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </button>  
                            </span> 
                      </div> 
                    </div>
                </div>
                <div class="modal-footer">
                    <input id="task_id" name="task_id" type="hidden" value="0">
                        <input class="btn btn-default" data-dismiss="modal" type="button" value="Cancel">
                            <button class="btn btn-info" id="btn-edit" type="button" value="add">
                                Update
                            </button>
                        </input>
                    </input>
                </div>
            </form>
        </div>
    </div>
</div>
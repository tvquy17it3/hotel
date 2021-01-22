<!-- Delete Task Modal Form HTML -->
<div class="modal fade" id="deleteTaskModals">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="frmDeleteTask">
                <div class="modal-header">
                    <h4 class="modal-title" id="delete-title" name="title">
                        Hủy Order
                    </h4>
                    <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                        ×
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Bạn có chắc chắn huy?
                    </p>
                    <p class="text-warning">
                        <small>
                            Order này sẽ nằm trong mục hủy, bạn có thể xem lại!
                        </small>
                    </p>
                </div>
                <div class="modal-footer">
                    <input id="task_id" name="task_id" type="hidden" value="0">
                        <input class="btn btn-default" data-dismiss="modal" type="button" value="Cancel">
                            <button class="btn btn-danger" id="btn-huy" type="button">
                                Hủy Order
                            </button>
                        </input>
                    </input>
                </div>
            </form>
        </div>
    </div>
</div>
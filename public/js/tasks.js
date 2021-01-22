$(document).ready(function() {
    $("#btn-add").click(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: 'admin/order/vieworder/add',
            data: {
                roomID: $("#frmAddTask :selected").val(),
                soluong: $("#frmAddTask input[name=soluong]").val(),
                orderID: $("#frmAddTask input[name=orderID]").val(),
            },
            dataType: 'json',
            success: function(data) {
                $('#frmAddTask').trigger("reset");
                $("#frmAddTask .close").click();
                window.location.reload();
            },
            error: function(data) {
                var errors = $.parseJSON(data.responseText);
                $('#add-task-errors').html('');
                $.each(errors.messages, function(key, value) {
                	console.log(value);
                    $('#add-task-errors').append('<li>' + value + '</li>');
                });
                $("#add-error-bag").show();
            }
        });
    });



    $("#btn-edit").click(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'PUT',
            url: 'admin/order/vieworder/update/' + $("#frmEditTask input[name=task_id]").val(),
            data: {
                task: $("#frmEditTask input[name=task]").val(),
                soluong: $("#frmEditTask input[name=soluong]").val(),
            },
            dataType: 'json',
            success: function(data) {
            	console.log(data);
                $('#frmEditTask').trigger("reset");
                $("#frmEditTask .close").click();
                window.location.reload();
            },
            error: function(data) {
                var errors = $.parseJSON(data.responseText);
                $('#edit-task-errors').html('');
                $.each(errors.messages, function(key, value) {
                    $('#edit-task-errors').append('<li>' + value + '</li>');
                });
                $("#edit-error-bag").show();
            }
        });
    });

    $("#btn-delete").click(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'DELETE',
            url: 'admin/order/vieworder/delete/' + $("#frmDeleteTask input[name=task_id]").val(),
            dataType: 'json',
            success: function(data) {
                $("#frmDeleteTask .close").click();
                window.location.reload();
            },
            error: function(data) {
                console.log(data);
            }
        });
    });

    $("#btn-huy").click(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'PUT',
            url: 'admin/order/huyorder/' + $("#frmDeleteTask input[name=task_id]").val(),
            dataType: 'json',
            success: function(data) {
                $("#frmDeleteTask .close").click();
                window.location.reload();
            },
            error: function(data) {
                console.log(data);
            }
        });
    });
});

function addTaskForm() {
    $(document).ready(function() {
        $("#add-error-bag").hide();
        $('#addTaskModal').modal('show');
    });
}


function editTaskForm(task_id) {
    $.ajax({
        type: 'GET',
        url: 'admin/order/vieworder/detail/' + task_id,
        success: function(data) {
            console.log(task_id);
            $("#edit-error-bag").hide();
            $("#frmEditTask input[name=task]").val("Phòng "+data.nameroom+" - Giá: " +data.task.price + " vnd");
            $("#frmEditTask input[name=soluong]").val(data.task.qty);
            $("#frmEditTask input[name=task_id]").val(data.task.id);
            $('#editTaskModal').modal('show');
        },
        error: function(data) {
            console.log(data);
        }
    });
}

function deleteTaskForm(task_id) {
    $.ajax({
        type: 'GET',
        url: 'admin/order/vieworder/detail/' + task_id,
        success: function(data) {
            $("#frmDeleteTask #delete-title").html("Phòng "+ data.nameroom + "?");
            $("#frmDeleteTask input[name=task_id]").val(data.task.id);
            $('#deleteTaskModal').modal('show');
        },
        error: function(data) {
            console.log(data);
        }
    });
}

function huyForms(task_id) {
     $(document).ready(function() {
        $("#add-error-bag").hide();
        $("#frmDeleteTask #delete-title").html("Hủy Order ID:  "+ task_id + "?");
        $("#frmDeleteTask input[name=task_id]").val(task_id);
        $('#deleteTaskModals').modal('show');
    });
}
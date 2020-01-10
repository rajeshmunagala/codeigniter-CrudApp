$(document).ready(function(){
    showAll();
    $('#addEmployeBtn').click(function(){
        $('#addEmployeeModal').modal('show');
        $('#addEmployeeModal').find('.modal-title').text('Add New Employee');
        $('#addEmployeeForm').attr('action', 'employees/addEmployee');
        
    });
    $('#btnAddEmp').click(function(){
        var formdata = $('#addEmployeeForm').serialize()
        var url =  $('#addEmployeeForm').attr('action');
        var firstname = $('input[name=firstname]');
        var lastname = $('input[name=lastname]');
        var email = $('input[name=email]');
        var result = '';
        if(firstname.val() == ''){
            firstname.addClass('is-invalid');
        } else{
            firstname.removeClass('is-invalid');
            result = '1';
        }
        if(lastname.val() == ''){
            lastname.addClass('is-invalid');
        } else{
            lastname.removeClass('is-invalid');
            result += '2';
        }
        if(email.val() == ''){
            email.addClass('is-invalid');
        } else{
            email.removeClass('is-invalid');
            result += '3';
        }
        if(result == '123'){
            $.ajax({
                type: 'ajax',
                method: 'POST',
                url: url,
                data: formdata,
                dataType: 'json',
                success: function(res){
                    console.log(res);
                    if(res.success == true){
                        $('#addEmployeeModal').modal('hide');
						$('#addEmployeeForm')[0].reset();
                        if(res.type == 'add'){
                            var type = 'added';
                        }
                        else if(res.type == 'update'){
                            var type = 'updated';
                        }
                        else{
                            alert('Error');
                        }
                        $('.alert-success').html('Employee '+type+' successfully').fadeIn().delay(4000).fadeOut('slow');
                        showAll();
                    }
                    else{
                        alert('Something went worng...');
                    }
                },
                error: function(){
                    console.log('failed to get response..2');
                }
            })
        }
        //$('#addEmployeeModal').modal('hide');
    });
    //edit
    $('#showdata').on('click','.item-edit', function(){
        var id = $(this).attr('data');
        $('#addEmployeeModal').modal('show');
        $('#addEmployeeModal').find('.modal-title').text('Update Employee');
        $('#addEmployeeForm').attr('action', 'employees/updateEmployee');
        $.ajax({
            type: 'ajax',
            url: 'employees/editEmployee',
            method: 'GET',
            data: {id: id},
            dataType: 'json',
            success: function(data){
                $('input[name=firstname]').val(data.firstname);
                $('input[name=lastname]').val(data.lastname);
                $('input[name=email]').val(data.email);
            },
            error: function(){
                alert('Error geting data..');
            }
        });
        
    })
    function showAll(){
        $.ajax({
            type: 'ajax',
            url: 'employees/showAllemployees',
            dataType: 'json',
            success: function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                   
                    html += `<tr>
                                <td>${data[i].id}</td>
                                <td>${data[i].firstname}</td>
                                <td>${data[i].lastname}</td>
                                <td>${data[i].email}</td>
                                <td>${data[i].created_on}</td>
                                <td><button class="btn btn-primary item-edit" data = "${data[i].id}">Edit</button> <button class="btn btn-danger item-delete"  data = "${data[i].id}">Delete</button>
                             </tr>`;
                }
                $('#showdata').html(html);
            },
            error: function(){
                alert('Data could not received form data base');
            }
        })
    }
});
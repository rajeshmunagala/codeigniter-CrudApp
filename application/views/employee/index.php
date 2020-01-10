<div class="container mt-4">
<h3>Employee Lists</h3>
<button class="btn btn-success btn-md" id="addEmployeBtn" data-target="#addEmployeeModal">Add New</button>
<div class="alert alert-success m-4" style="display: none;"></div> 
<table class="table table-bordered mt-4">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Email</th>
      <th scope="col">Created</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody id="showdata">
			
	</tbody>
</table>
</div>

<div class="modal" tabindex="-1" role="dialog" id="addEmployeeModal" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="addEmployeeForm" action="">
            <div class="form-group row">
                <label for="firstname" class="col-sm-4 col-form-label">First Name</label>
                <div class="col-sm-8">
                    <input type="firstname" class="form-control" id="firstname" name="firstname" placeholder="Firstname">
                </div>
            </div>
            <div class="form-group row">
                <label for="lastname" class="col-sm-4 col-form-label">Last Name</label>
                <div class="col-sm-8">
                    <input type="lastname" class="form-control" id="lastname" name="lastname" placeholder="lastname">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
            </div>
            
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" id="btnAddEmp" class="btn btn-primary">Add New Employee</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="deleteModal" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirm Delete?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <p>Would you like to delete record?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
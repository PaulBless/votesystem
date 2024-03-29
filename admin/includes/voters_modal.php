<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New Voter</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="voters_add.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">
                      Firstname
                      <span class="text-danger">*</span>  
                    </label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="firstname" name="firstname" onkeypress="return acceptLetters(event)" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label">
                      Lastname
                      <span class="text-danger">*</span>  
                    </label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="lastname" name="lastname" onkeypress="return acceptLetters(event)" required>
                    </div>
                </div>
                <div class="form-group" style="display: none;">
                    <label for="password" class="col-sm-3 control-label">Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="password" name="password" value="123456">
                    </div>
                </div>
                <div class="form-group"style="display: nonee;">
                    <label for="password" class="col-sm-3 control-label">Phone Number</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="phone" name="phone" pattern="[0][0-9]{9}" maxLength="10" onkeypress="return isNumberKey(event)" >
                    </div>
                </div>

                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Edit Voter</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="voters_edit.php">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label for="edit_firstname" class="col-sm-3 control-label">Firstname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_firstname" name="firstname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_lastname" class="col-sm-3 control-label">Lastname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_lastname" name="lastname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Phone Number</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="phone" name="phone" pattern="[0][0-9]{9}" maxLength="10" >
                    </div>
                </div>

                <div class="form-group" style="display: none;">
                    <label for="edit_password" class="col-sm-3 control-label">Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="edit_password" name="password">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><b>Deleting...</b></h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" method="POST" action="voters_delete.php">
              <input type="hidden" class="id" name="id">
              <div class="text-center">
                  <p>DELETE VOTER</p>
                  <h2 class="bold fullname"></h2>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
            </form>
          </div>
      </div>
  </div>
</div>

<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><b><span class="fullname"></span></b></h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" method="POST" action="voters_photo.php" enctype="multipart/form-data">
              <input type="hidden" class="id" name="id">
              <div class="form-group">
                  <label for="photo" class="col-sm-3 control-label">Photo</label>

                  <div class="col-sm-9">
                    <input type="file" id="photo" name="photo" required>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
            </form>
          </div>
      </div>
  </div>
</div>

<!-- Import Voters -->
<div class="modal fade" id="importCountryModal" tabindex="-1" role="dialog" aria-labelledby="conveyanceModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Choose Voters CSV</b></h4>
      </div>
      <div class="modal-body">
        <form class="forms-sample" method="POST" id="upload_country_form" enctype="multipart/form-data">
            
              <div class="form-group">
                  <label>Select File </label>
                  <input type="file" name="file" id="file" class="form-control" accept=".xlsx, .xls, .csv" required/>
              </div>
                      
          </div>
          <div class="modal-footer">
            <button type="submit" name="upload" class="btn btn-success mr-3" style="background-color:#28a745!important">Upload File</button>
            <button type="button" class="btn btn-secondary bg-secondary " data-dismiss="modal">Close</button>
        </form> </div>
      </div>
    </div>
  </div>
</div>
     
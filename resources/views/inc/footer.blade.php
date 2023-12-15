<?php 
/*
Poject Title : ARKA
Author       : Mukund Krishan
Date         : 25/07/2023.
*/


?>
<div class="modal fade" id="changepasswordlt" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Change Password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form enctype="multipart/form-data"method="post" class="form-control">
            <div class="form-group  col-md-12">
				<label>Old Password</label>
				<input  class="form-control"  type="text" name="oldpassword" id="oldpassword" required title="Old Password" value=""  placeholder="Old Password" /> 
				<div class="help-block with-errors">Enter Your Old Password</div>
			</div>
			<div class="form-group col-md-12">
				<label>New Password</label>
				<input type="text"  name="password" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword" placeholder="New Password" value="" required>
                <!-- <span class="help-block">Minimum of 6 characters</span>  -->
				<div class="help-block with-errors"></div>
			</div>
			<div class="form-group col-md-12">
				<label>Confirm Password</label>
				<input type="text" class="form-control" name="cpassword" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, Password don't match" placeholder="Confirm Password" value="" required>
                <div class="help-block with-errors"></div>
			</div> 
			<!-- <div class="clearfix"></div> -->
            <div class="modal-footer">
                <button type="submit" name="change_password" value="change_password" class="btn  btn-success">Update</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
                
            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </form>
    </div>
  </div>
</div>
<footer class="footer">
    <div class="copyrights">
        <p class="crm">[CRM 2.0]</p>
        <p>2023 © ARKA CRM 2.0</p>
    </div>
</footer>
</body>

</html>
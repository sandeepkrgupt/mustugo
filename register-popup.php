<div class="modal fade bs-example-modal-sm2" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="model-reg">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <form class="col-md-12">
	  <h4>Hi.. -Thanks Register Now <i class="fa fa-paper-plane-o" aria-hidden="true"></i>..</h4>
	  <div><img src="images/arrow-left.png" class="arrow-fix hidden-xs"></div>
		<input type="text" class="form-control" placeholder="Name*" required>
		<select class="form-control">
			<option selected>Gender*</option>
			<option>Male</option>
			<option>Fe Male</option>
		</select>
		<input type="text" class="form-control" placeholder="Mobile Number*" required>
		<input type="email" class="form-control" placeholder="User ID*" required>
		<input type="password" class="form-control" placeholder="Password*" required>
		<textarea class="form-control" placeholder="Address" ></textarea>
		<div class="col-md-6"><input type="file" id="userimgbtn"></div><div class="col-md-6"><img id="userImg" src="images/user.png" width="50" height="50" class="thumbnail image-pos"></div>
		<div class="clearfix"></div>
		<button type="submit" class="btn btn-success">Register</button>
		<button type="button" class="btn btn-warning" id="cancel">Cancel</button>
	  </form>
    </div>
  </div>
</div>
<script>
$(function () {
    $("#userimgbtn").change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = userImage;
            reader.readAsDataURL(this.files[0]);
        }
    });
});
function userImage(e) {
    $('#userImg').attr('src', e.target.result);
};
</script>
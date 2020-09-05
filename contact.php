<?php
  $title = "Contact";
  require_once "./template/header.php";
?>
    <div class="row">
        <div class="col-md-3"></div>
		<div class="col-md-6 text-center">
			<form class="form-horizontal">
			  	<fieldset>
				    <legend>Contact Information</legend>
				    <span class="help-block">BookWorm.com</span>
				
				  <span class="help-block">Phone: +8801825449021</span>
				  <span class="help-block">Address: Chanpara,Uttarkhan. Abdullahpur</span>
                             <span class="help-block">Dhaka, Bangladesh</span>
                              <h4>Contact us today, and get reply with in 24 hours!</h4>
                             <label for="inputName" class="col-lg-2 control-label">Feedback</label>
                             <textarea class="form-control" rows="3" id="textArea"></textarea>
                             <button type="reset" class="btn btn-default">Cancel</button>
				        	<button type="submit" class="btn btn-primary">Submit</button>
				      	<div class="col-lg-10">
				      	</div>
				    </div>
			  	</fieldset>
			</form>
		</div>
		<div class="col-md-3"></div>
    </div>
<?php
  require_once "./template/footer.php";
?>
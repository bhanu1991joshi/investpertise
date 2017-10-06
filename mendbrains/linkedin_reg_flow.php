<?php include("header.php"); ?>

<script>
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})
</script>
	<div class="col-md-12 text-center">
	<form>
			<table class="set_pass" style="margin:5% 10% 10% 10%;">
				<tr class="text-center">
					<td><h2>Set your Password</h2></td>
				</tr>
				<tr>
					<td class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</td>
				</tr>
				<tr>
					<td><br><br>
						<div class="progress" >
						  <div 	class="progress-bar progress-bar-striped progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
							<span class="sr-only">50% Complete (success)</span>
						  </div>
						</div>
					</td>
				</tr>
				<tr>
					<td><br><br><br>
						<a href="javascript:void(0)" class="btn btn-default" style="background:#fff;" data-toggle="modal" data-target="#myModal">Login with LinkedIn</a>
					</td>
				
				</tr>
				<tr>
					<td><br><br>
						<input type="submit" class="btn btn-default" style="background:#fff;" value="Save & Continue" />
					</td>
				</tr>
			</table>
		</form>
	</div>
	

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">LinkedIn Login</h4>
      </div>
      <div class="modal-body">
        This is LinkedIn Authorisation Flow
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Done</button>
      </div>
    </div>
  </div>
</div>
	
<?php include("footer.php"); ?>
<?php include("header.php"); ?>
<script>

$(document).ready(function () {
    $('#rad1').change(function () {
        if (this.checked) 
        //  
           $('.com1').fadeIn('slow');
        else 
            $('.com1').fadeOut('slow');
    });
	$('#rad2').change(function () {
        if (this.checked) 
        //  
           $('.com2').fadeIn('slow');
        else 
            $('.com2').fadeOut('slow');
    });
	$('#rad3').change(function () {
        if (this.checked) 
        //  
           $('.com3').fadeIn('slow');
        else 
            $('.com3').fadeOut('slow');
    });
	
});
</script>


	<div class="col-md-12 text-center">
		<form>
			<table class="set_pass" style="margin:5% 10% 20% 10%;">
				<tr class="text-center">
					<td colspan="2"><h2>Interests and Other Questions</h2></td>
				</tr>
				<tr>
					<td colspan="2" class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</td>
				</tr>
				<tr>
					<td colspan="2"><br><br>
						<div class="progress" >
						  <div 	class="progress-bar progress-bar-striped progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
							<span class="sr-only">100% Complete (success)</span>
						  </div>
						</div>
					</td>
				</tr>
				
				<tr>
					<td><br><br>
						What form of Compensation do you want?
					</td>
					<td><br><br>
						<input type="radio" /> Equality &nbsp;
						<input type="radio" /> Cash &nbsp;
						<input type="radio" /> Mix &nbsp;
						<input type="radio" /> Other &nbsp;
					</td>
				</tr>
				<tr>
					<td>
						What Geographies are you interested In?
					</td>
					<td>
						<select>
							<option>Singapore</option>
							<option>Thailand</option>
							<option>Indonesia</option>
							<option>Phillippines</option>
							<option>Vietnam</option>
							<option>Australia</option>
							<option>India</option>
							<option>Myanmar</option>
							<option>Laos</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						Have you ever started a Company before?
					</td>
					<td>
						<input name="r1" type="radio" id="rad1"/> Yes &nbsp;
						<input  name="r1" type="radio" /> No &nbsp;
						<div class="com1">
							<input type="text" placeholder="Company Name" /><br>
							<input type="text" placeholder="URL" /><br>
							<a href="#">+ Add Company</a>
						</div>
						
					</td>
				</tr>
				<tr>
					<td>
						Have you ever sat on a board before?
					</td>
					<td>
						<input type="radio" name="r2" id="rad2" /> Yes &nbsp;
						<input type="radio" name="r2" /> No &nbsp;
						<div class="com2">
							<input type="text" placeholder="Company Name" /><br>
							<input type="text" placeholder="URL" /><br>
							<a href="#">+ Add Company</a>
						</div>
						
					</td>
				</tr>
				<tr>
					<td>
						Have you ever Exited a company before?
					</td>
					<td>
						<input type="radio" id="rad3" name="r3" /> Yes &nbsp;
						<input type="radio" name="r" /> No &nbsp;
						<div class="com3">
							<input type="text" placeholder="Company Name" /><br>
							<input type="text" placeholder="URL" /><br>
							<a href="#">+ Add Company</a>
						</div>
						
					</td>
				</tr>
				<tr>
					<td colspan="2"><br><br>
						<input type="submit" class="btn btn-default" style="background:#fff;" value="Save & Continue" />
					</td>
				</tr>
			</table>
		</form>
	</div>
<?php include("footer.php"); ?>
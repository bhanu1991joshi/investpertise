<?php include("founder_header.php"); ?>
<script>
	$( document ).ready(function() {
});
function showSearch(){
	
	if($(".active").find("a").attr('href')=="#advisors")
		{
			document.getElementById("input-form-advisor").style.display="inline";
			document.getElementById("input-form-founder").style.display="none";
			document.getElementById("input-form-startups").style.display="none";
		}
	else if($(".active").find("a").attr('href')=="#startups")
		{
			document.getElementById("input-form-advisor").style.display="none";
			document.getElementById("input-form-founder").style.display="none";
			document.getElementById("input-form-startups").style.display="inline";
		}
	else if($(".active").find("a").attr('href')=="#founders")
		{
			document.getElementById("input-form-advisor").style.display="none";
			document.getElementById("input-form-founder").style.display="inline";
			document.getElementById("input-form-startups").style.display="none";
		}

}
</script>

<div class="col-md-12">
	<div class="col-md-8 founder_advisor">
	<div>

	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">
	<li  role="presentation" class="active tab-1" ><a onClick="showSearch()" href="#advisors" aria-controls="advisors" role="tab" data-toggle="tab" >Advisors</a></li>
	<li role="presentation" ><a onClick="showSearch()" href="#startups" aria-controls="startups" role="tab" data-toggle="tab" style="color:#222;">Start Ups</a></li>
	<li role="presentation" ><a onClick="showSearch()" href="#founders" aria-controls="founders" role="tab" data-toggle="tab" style="color:#222;">Founders</a></li>
	</ul>

	<!-- Tab panes -->
	<div class="tab-content images-content">
		<div role="tabpanel" class="tab-pane active" id="advisors">
			<div class="col-md-12">
				<div class="col-md-3">
					<img src="advisor.png" />
				</div>
				<div class="col-md-7">
					<table class="tablee">
						<tr>
							<td>Name</td><td> Fred Flintstone</td>
						</tr>
						<tr>
							<td>Current Role</td><td> Gravel Pit</td>
						</tr>
						<tr>
							<td>Location</td><td> Bedrock</td>
						</tr>
						<tr>
							<td>Current Mentee Companies</td><td> Moe's Tavren</td>
						</tr>
						<tr>
							<td>Industry</td><td> Hard Knocks</td>
						</tr>
						<tr>
							<td>Top 3 Skills</td><td> Marketing, Strategy, Product</td>
						</tr>
						<tr>
							<td>Previous Exits</td><td> [Shows no more than 2 + "More"]</td>
						</tr>
						<tr>
							<td>Compensation</td><td> Cash</td>
						</tr>
						
					</table>
				<p style="margin-top:10px;">
					<a href="#" class="btn btn-default" style="background:#fff;width:49%;">See Profile</a>
					<a href="#" class="btn btn-default" style="background:#fff;width:49%;">Contact</a>
				</p>
			</div>
		</div>
		<div class="col-md-12" style="margin-top:10%;">
			<div class="col-md-3">
					<img src="advisor1.png" />
				</div>
				<div class="col-md-7">
					<table class="tablee">
						<tr>
							<td>Name</td><td> Fred Flintstone</td>
						</tr>
						<tr>
							<td>Current Role</td><td> Gravel Pit</td>
						</tr>
						<tr>
							<td>Location</td><td> Bedrock</td>
						</tr>
						<tr>
							<td>Current Mentee Companies</td><td> Moe's Tavren</td>
						</tr>
						<tr>
							<td>Industry</td><td> Hard Knocks</td>
						</tr>
						<tr>
							<td>Top 3 Skills</td><td> Marketing, Strategy, Product</td>
						</tr>
						<tr>
							<td>Previous Exits</td><td> [Shows no more than 2 + "More"]</td>
						</tr>
						<tr>
							<td>Compensation</td><td> Cash</td>
						</tr>
						
					</table>
				<p style="margin-top:10px;">
					<a href="#" class="btn btn-default" style="background:#fff;width:49%;">See Profile</a>
					<a href="#" class="btn btn-default" style="background:#fff;width:49%;">Contact</a>
				</p>
			</div>
		</div>
		</div>
		<div role="tabpanel" class="tab-pane" id="startups">
			<div class="col-md-12">
				<div class="col-md-3">
					<img src="startups1.jpeg" />
				</div>
				<div class="col-md-7">
					<table class="tablee">
						<tr>
							<td>Name</td><td> Moe's Tavren</td>
						</tr>
						<tr>
							<td>Founders</td><td>  Homer Simpson, Moe Szyslak</td>
						</tr>
						<tr>
							<td>Location</td><td> Springfield</td>
						</tr>
						
						<tr>
							<td>Industry</td><td> F&B</td>
						</tr>
						<tr>
							<td>Stage</td><td> Growth</td>
						</tr>
						<tr>
							<td>Advisors</td><td> Fred Flintstone</td>
						</tr>
						<tr>
							<td>Investors</td><td> Mr. Burns</td>
						</tr>
						
					</table>
				<p style="margin-top:10px;">
					<a href="#" class="btn btn-default" style="background:#fff;width:49%;">See Profile</a>
					<a href="#" class="btn btn-default" style="background:#fff;width:49%;">Contact</a>
				</p>
			</div>
		</div>
		

		</div>
		<div role="tabpanel" class="tab-pane" id="founders">
			<div class="col-md-12">
				<div class="col-md-3">
					<img src="founder.png" />
				</div>
				<div class="col-md-7">
					<table class="tablee">
						<tr>
							<td>Name</td><td> Homer Simpson</td>
						</tr>
						<tr>
							<td>Company Name</td><td> Moe's Tavern</td>
						</tr>
						<tr>
							<td>Location</td><td> Springfield</td>
						</tr>
						<tr>
							<td>Co-Founders</td><td> Moe Szyslak</td>
						</tr>
						<tr>
							<td>Industry</td><td> F & B</td>
						</tr>
						<tr>
							<td>Work Experience</td><td> Springfield Nuclear</td>
						</tr>
						<tr>
							<td>Education</td><td> Springfield High</td>
						</tr>
						<tr>
							<td>Current Advisor</td><td> Fred Flinstone</td>
						</tr>
						
					</table>
				<p style="margin-top:10px;">
					<a href="#" class="btn btn-default" style="background:#fff;width:49%;">See Profile</a>
					<a href="#" class="btn btn-default" style="background:#fff;width:49%;">Contact</a>
				</p>
			</div>
		</div>
		</div>
	</div>

	</div>
	</div>
	<div class="col-md-4" style="margin-top:8%;">
		<form id="input-form-advisor">
			<table class="tablee1">
				<tr>
					<td colspan="2"><input type="text" placeholder="Search by Advisor Name"/></td>
				</tr>
				<tr>
					<td colspan="2"><input type="text" placeholder="Search by Advisor Company"/></td>
				</tr>
				<tr>
					<td colspan="2"><input type="text" placeholder="Search by Advisor Location"/></td>
				</tr>
				<tr>
					<td colspan="2"><input type="text" placeholder="Search by Advisor Industry"/></td>
				</tr>
				<tr>
					<td colspan="2"><input type="text" placeholder="Filter by Board Experience Only"/></td>
				</tr>
				<tr>
					<td>Compensation</td>
					<td>
						<select>
							<option>Cash</option>
							<option>Mix</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Skill</td>
					<td>
						<select>
							<option>Marketing</option>
							<option>Strategy</option>
							<option>Product</option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="2" class="text-center"><input type="submit" value="Search" class="btn btn-lg btn-default" style="background:#fff;width:100px;"></td>
				</tr>

			</table>
		</form>

		<form id="input-form-startups">
			<table class="tablee1">
				<tr>
					<td colspan="2"><input type="text" placeholder="Search by Company Name"/></td>
				</tr>
				<tr>
					<td colspan="2"><input type="text" placeholder="Search by Advisor or Founder Name"/></td>
				</tr>
				<tr>
					<td colspan="2"><input type="text" placeholder="Search by Company Location"/></td>
				</tr>
				<tr>
					<td colspan="2"><input type="text" placeholder="Search by Company Industry"/></td>
				</tr>
				<tr>
					<td>Stage</td>
					<td>
						<select>
							<option>Idea</option>
							<option>Growth</option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="radio" />Only Companies with Pitch Decks
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="radio" />Only Funded Companies
					</td>
				</tr>
				<tr>
					<td colspan="2" class="text-center"><input type="submit" value="Search" class="btn btn-lg btn-default" style="background:#fff;width:100px;"></td>
				</tr>
				<tr>
					<td colspan="2" class="text-center" style="font-weight:bold;"><a href="#">ADD A NEW STARTUP</a></td>
				</tr>

			</table>
		</form>

		<form id="input-form-founder">
			<table class="tablee1">
				<tr>
					<td colspan="2"><input type="text" placeholder="Search by Founder Name"/></td>
				</tr>
				<tr>
					<td colspan="2"><input type="text" placeholder="Search by Founder Company"/></td>
				</tr>
				<tr>
					<td colspan="2"><input type="text" placeholder="Search by Founder Location"/></td>
				</tr>
				<tr>
					<td colspan="2"><input type="text" placeholder="Search by Founder Industry"/></td>
				</tr>
				<tr>
					<td colspan="2"><input type="text" placeholder="Filter by Board Experience Only"/></td>
				</tr>
				<tr>
					<td>Skill</td>
					<td>
						<select>
							<option>Marketing</option>
							<option>Strategy</option>
							<option>Product</option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="2" class="text-center"><input type="submit" value="Search" class="btn btn-lg btn-default" style="background:#fff;width:100px;"></td>
				</tr>


			</table>
		</form>
	
	</div>
</div>
	<?php include("footer.php"); ?>

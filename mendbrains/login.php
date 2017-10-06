<?php include("header.php"); ?>
	<div class="col-md-12">
		
		<form class="login_form">
			<table style="margin:7% 40% 5% 35%;">
				<tr>
					<td><h2><span class="glyphicon glyphicon-log-in"></span> Login</h2></td>
				</tr>
				<tr>
					<td><input type="text" name="email"	placeholder="Email" /></td>
				</tr>
				<tr>
					<td><input type="password" name="password"	placeholder="Password" /></td>
				</tr>
				<tr class="text-right">
					<td><input type="submit" name="Submit" style="width:100px;background:#fff;border:1px solid #999;" /></td>
				</tr>
				<tr class="text-right">
					<td><a href="forgot_password.php" style="font-size:17px;">Forgot Password</a></td>
				</tr>
				<tr class="text-right">
					<td><a href="">Register as a Founder</a></td>
				</tr>
				<tr class="text-right">
					<td><a href="">Register as an Advisor</a></td>	
				</tr>
			</table>
		</form>
	</div>
<?php include("footer.php"); ?>
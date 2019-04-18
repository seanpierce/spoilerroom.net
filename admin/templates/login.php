<?php

?>

<div class="row justify-content-lg-center">
	<div class="col-6">
		<h3>Login</h3>
		
		<form action="./" method="post">
			<div class="form-group">
				<label for="email-input">Email address</label>
				<input type="email" class="form-control" name="email" id="email-input" aria-describedby="emailHelp" placeholder="Enter email">
				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			</div>
			<div class="form-group">
				<label for="password-input">Password</label>
				<input type="password" class="form-control" name="password" id="password-input" placeholder="Password">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>

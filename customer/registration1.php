<html lang="en">
<head>
	<link rel="stylesheet" href="style.css">
       
	<title>Customer Register Form</title>
</head>
<body>
<div class="container">
<header>Customer Register Form</header>

<form action="registration.php" method="POST">
<div class="form first">
	<div class="details Customer">
	<span class="title">Details Customer</span>
	<div class="fields">
		<div class="input-field">
			<label for="full_name"> Full Names(First and Last)</label>
				<input type="text" placeholder="Enter Full Name" name="full_name" required >
			</div>

		<div class="input-field">
			<label for="date_of_birth"> Date of Birth</label>
				<input type="date" placeholder="Enter birth Date" name="dob" required maxlength="">
			</div>

		<div class="input-field">
			<label for="email"> Email</label>
				<input type="Email"placeholder="Enter your Email" name="email" required>
			</div>
			<div class="input-field">
			<label for="mobile_number">Mobile  Number</label>
				<input type="number" placeholder="Enter your mobile Number" name="mobile" required >
			</div>

		<div class="input-field">
			<label for="gender">Gender</label>
				<input type="text" placeholder="Enter your Gender" maxlength="" name="gender" required>
			</div>

			<div class="input-field">
			<label for="id">ID Number</label> 
				<input type="text" placeholder="Enter ID number" placeholder="16" name="id_No" required>
			</div>

		<div class="input-field">
			<label for="cell">CELL</label> 
				<input type="text" placeholder="Enter Your Cell" placeholder="16" name="cell" required>
			</div>
			<div class="input-field">
			<label for="village">Village</label> 
				<input type="text" placeholder="Enter Your Village" placeholder="16" name="village" required>
			</div>

		<div class="input-field">
			<label for="create_password">Create password</label>
				<input type="password" placeholder="Create password" minlength="5" name="password" required>
			</div>

		<div class="input-field">
			<label for="confirm_password"> Confirm password</label>
				<input type="password" placeholder="comfirm" name="confirm_password" required>
			</div>
			</div>
		<button class="submit" name="submit" style="margin-left:300px">
			<span class="submit">Submit</span>
	</div>
	</form>
</div>
	</body>
	</html>
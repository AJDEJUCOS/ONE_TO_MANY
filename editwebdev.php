<?php require_once 'core/handleForms.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<?php $getWebDevByID = getWebDevByID($pdo, $_GET['web_dev_id']); ?>
	<h1>SLCK LOCALS ™</h1>
	<h3>Edit Client Details</h3>
	<form action="core/handleForms.php?web_dev_id=<?php echo $_GET['web_dev_id']; ?>" method="POST">
		<p>
			<label for="firstName">Username</label> 
			<input type="text" name="username"value="<?php echo $getWebDevByID['username']; ?>">
		</p>
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="firstName" value="<?php echo $getWebDevByID['first_name']; ?>">
		</p>
		<p>
			<label for="firstName">Last Name</label> 
			<input type="text" name="lastName" value="<?php echo $getWebDevByID['last_name']; ?>">
		</p>
		<p>
			<label for="firstName">Date of Birth</label> 
			<input type="date" name="dateOfBirth" value="<?php echo $getWebDevByID['date_of_birth']; ?>">
		</p>
		<p>
			<label for="firstName">Country</label> 
			<input type="text" name="country" value="<?php echo $getWebDevByID['country']; ?>">
			<input type="submit" name="editWebDevBtn">
		</p>
	</form>
</body>
</html>


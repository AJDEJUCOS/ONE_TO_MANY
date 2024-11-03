<?php require_once 'core/models.php'; ?>
<?php require_once 'core/dbConfig.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>

	<a href="index.php">Return to home</a>
	<h1>SLCK LOCALS ™</h1>
	<?php $getAllInfoByWebDevID = getAllInfoByWebDevID($_GET['web_dev_id']); ?>
	<h3>Username: <?php echo $getAllInfoByWebDevID['username']; ?></h3>
	<h3>Add New Order</h3>
	<form action="core/handleForms.php?web_dev_id=<?php echo $_GET['web_dev_id']; ?>" method="POST">
		<p>
			<label for="firstName">(Shirt, Jacket, Pants)</label> 
			<input type="text" name="projectName">
		</p>
		<p>
			<label for="firstName">Size</label> 
			<input type="text" name="technologiesUsed">
			<input type="submit" name="insertNewProjectBtn">
		</p>
	</form>

	<table style="width:100%; margin-top: 50px;">
	  <tr>
	    <th>Order ID</th>
	    <th>Clothing</th>
	    <th>Size</th>
	    <th>Order Name</th>
	    <th>Date Added</th>
	    <th>Action</th>
	  </tr>
	  <?php $getProjectsByWebDev = getProjectsByWebDev($pdo, $_GET['web_dev_id']); ?>
	  <?php foreach ($getProjectsByWebDev as $row) { ?>
	  <tr>
	  	<td><?php echo $row['project_id']; ?></td>	  	
	  	<td><?php echo $row['project_name']; ?></td>	  	
	  	<td><?php echo $row['technologies_used']; ?></td>	  	
	  	<td><?php echo $row['project_owner']; ?></td>	  	
	  	<td><?php echo $row['date_added']; ?></td>
	  	<td>
	  		<a href="editproject.php?project_id=<?php echo $row['project_id']; ?>&web_dev_id=<?php echo $_GET['web_dev_id']; ?>">Edit</a>

	  		<a href="deleteproject.php?project_id=<?php echo $row['project_id']; ?>&web_dev_id=<?php echo $_GET['web_dev_id']; ?>">Delete</a>
	  	</td>	  	
	  </tr>
	<?php } ?>
	</table>

	
</body>
</html>
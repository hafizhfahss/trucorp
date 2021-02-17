<!DOCTYPE html>
<html>
<head>
	<title>Trucorp.web</title>
</head>
<body>
	<?php 
		$conn = mysqli_connect('172.18.0.2','root','owlowl','Trucorp');
		$query = "SELECT *FROM users";
		$result = $conn->query($query);
		while($data=$result->fetch_assoc())
		{?>

			<?php echo $data['id']?>
			<?php echo $data['nama']?>
			<?php echo $data['kantor']?>

		<?php }
	 ?>
</body>
</html>

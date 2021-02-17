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
		$user = 0;

		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Kantor</th>		
		</tr>		

		while($data=$result->fetch_assoc())
		{?>
		<tr>
			<td><?php echo $data['id']?></td>
			<td><?php echo $data['nama']?></td>
			<td><?php echo $data['kantor']?></td>
		</tr>

		<?php $user = $user + 1; }
		echo "Jumlah User Terdaftar = ".$user;?>
</body>
</html>

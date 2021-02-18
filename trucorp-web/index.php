<!DOCTYPE html>
<html>
<head>
	<title>Trucorp.web</title>
</head>
<body>

<<<<<<< HEAD
	<table border=1>
		<tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Kantor</th>         
                </tr> 
=======
	
	<tr>
		<th>ID</th>
		<th>Nama</th>
		<th>Kantor</th>		
	</tr>	
	
>>>>>>> e2f5fdfb1ca2a52706d9e58b12c883010cb6e8d3

	<?php 
		$conn = mysqli_connect('172.21.0.3','root','owlowl','Trucorp');
		$query = "SELECT *FROM users";
		$result = $conn->query($query);
		$user = 0;
<<<<<<< HEAD
=======
	
>>>>>>> e2f5fdfb1ca2a52706d9e58b12c883010cb6e8d3

		while($data=$result->fetch_assoc())
		{?>
		<tr>
			<td><?php echo $data['id']?></td>
			<td><?php echo $data['nama']?></td>
			<td><?php echo $data['kantor']?></td>
		</tr>

		<?php $user = $user + 1; }
		echo "Jumlah User Terdaftar = ".$user;?>
	</table>
</body>
</html>

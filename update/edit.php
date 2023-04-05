<?php
	include('../connect.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `user` where userid='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Exchange Rate</title>
<link rel="stylesheet" type="text/css" href="../css/add-edit.css"/>
</head>
<body>
	<div class="mainbody">
		<div class="secondBody">
	<h2>Edit Currency</h2>
	<form method="POST" action="../update.php?id=<?php echo $id; ?>">
		<label>Currency Selection:</label><input readonly="readonly" value="<?php echo $row['id_currency']; ?>" name="id_currency"><br>

		<label>Change Rate:</label><input type="text" class="number" value="<?php echo $row['currency_value']; ?>" name="currency_value"><br>

		<button type="submit" name="submit">Submit</button>
        
		<a href="/padma/update/">Cancel</a>
	</form>
	</div>
	</div>
</body>

<script src="../js/currency-format.js"></script>
</html>
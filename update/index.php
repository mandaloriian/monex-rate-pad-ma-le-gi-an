<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['userrname'])){
?>

<!DOCTYPE html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Rate</title>
        <link rel="stylesheet" type="text/css" href="../css/update.css" />
    </head>
    <body>
    <p class="tooltips">You Logged In Successfully as <span class="name0user"><?php echo $_SESSION['name']; ?></span> </p>
    <div class="mainpages">
        <div class="h2-h2">
            <img src="../img/padma-legian-logo.png" alt="" width="80" height="60">
            <p><a href="../login/logout.php">Logout</a></p>
        </div>
    </div>
    <div class="secondbodies">
        <table>
            <thead>
                <tr>
                    <th>CURRENCY</th>
                    <th>BANK NOTE</th>
                    <th>UPDATE RATE</th>
                </tr>
            </thead>
            <tbody>
                <?php
				    include('../connect.php');
				    $query=mysqli_query($conn,"select * from `user`");
				    while($row=mysqli_fetch_array($query)){
			    ?>
                <tr>
                    <td><?php echo '<img src="data:image/png;base64,'.base64_encode($row['flag']).'" width="20px" height="15px" class="cocok" "/>';  echo $row['id_currency'];?></td>

                    <td><?php echo number_format($row['currency_value']); ?>  IDR</td>
                    
                    <td><a href="edit.php?id=<?php echo $row['userid']; ?>" class="update-btn">Update Price</a></td>
					

					</td>
                </tr>
            </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
        </div>
        </div>
    </body>
</html>

<?php
}else{
    header("Location: ../login/");
}
?>
<!DOCTYPE html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Padma Exchange Rate</title>
        <meta http-equiv="refresh" content="7200">
        <link rel="stylesheet" type="text/css" href="css/mainpage.css"/>
    </head>
    <body>

<div class="mainpages">

    <div class="h2-h2">
        <span><img src="img/padma-legian-logo.png"></span>
        <h2>Exchange Rate</h2>
    </div>

                <div class="secondbodies">
                <table>
                    <thead>
                    <tr>
                    <th>CURRENCY</th>
                    <th>BANK NOTE</th>
                    </tr>
                    </thead>
                <tbody>
                    <?php
				    include('connect.php');
				    $query=mysqli_query($conn,"select * from `user`");
				    while($row=mysqli_fetch_array($query)){
			        ?>
                    
                    <tr>
                    <td><?php echo '<img src="data:image/png;base64,'.base64_encode($row['flag']).'" width="20px" height="15px" class="cocok" "/>'; echo $row['id_currency']; ?></td>

                    <td><?php echo number_format($row['currency_value']); ?>  IDR</td>
                </tr>
            </tr>
            <?php
                }
            ?>
            </tbody>
            </table>
            </div>
        </div>

        <div class="firstfooter">
            <div class="secondfooter">
                <ul>
                    <li><a href="/padma/login/">Account</a></li>
                    <li><a href="/padma/about/">About</a></li>
                    <li>Jl. Padma No. 1 Legian - Bali 80361 Indonesia</li>
                    <li>Phone : <span class="aksesoris">+62 361 752 111</span>, Email: <span class="aksesoris">reservation.legian@padmahotels.com</span></li>
                </ul>
            </div>
            <p>Copyright © 2023 All rights reserved - Padma Resort Legian</p>
        </div>
    </body>
</html>
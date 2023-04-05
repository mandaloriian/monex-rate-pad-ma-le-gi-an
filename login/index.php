<!DOCTYPE html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/loginform.css"/>
    </head>
    <body>
        <div class="first-body">
            <div class="second-body">
                <form action="login-padma.php" method="post">
                    <img src="../img/padma-legian-logo.png" alt="">
                        <label>Username :</label>
                            <input type="text" name="usname" placeholder="User Name">
                                <label>Password :</label>
                            <input type="password" name="password" placeholder="Password">
                        <button type="submit">Login</button>
                    <span class="menu-login-bawah">
                        <p><a href="../about/">Forgot Password?</a></p>
                        <p><a href="../">Back Home</a></p>
                    </span>
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error'];?></p>
                    <?php } ?>
                </form>
            </div> 
        </div>
    </body>
</html>
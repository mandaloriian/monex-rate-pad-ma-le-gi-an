<?php
session_start();
include "connect-user-db.php";

    if(isset($_POST['usname']) && isset($_POST['password'])) {
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            // $data = htmlspesialchars($data);
            return $data;
        }

        $usname = validate($_POST['usname']);
        $pass = validate($_POST['password']);

        if(empty($usname)){
            header("Location: index.php?error=Perlu Username Untuk Login");
            exit();
        }else if(empty($pass)){
            header("Location: index.php?error=Perlu Password Untuk Login");
            exit();
        }else{

            $sql="SELECT * FROM padma_user WHERE userrname='$usname' AND paassword='$pass'";
            $hasil=mysqli_query($conn,$sql);
            if(mysqli_num_rows($hasil) === 1){
                $row = mysqli_fetch_assoc($hasil);
                $_SESSION['userrname'] = $row['userrname'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location:../update/");
                }else{
                    header("Location:index.php?error=kesalahan username dan password");
                exit();
            
                //error token belum fix
            // }else{
            //     header("Location: index.php?error=Perlu Username dan Password untuk login");
            // exit();
            
            }
        }
    }else{
        header("Location: ../update/");
        exit();
    }


?>
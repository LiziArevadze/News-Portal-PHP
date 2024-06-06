<?php
    if(isset($_POST["loginbutton"])){
        $loginemail=$_POST["loginemail"];
        $loginPassword=$_POST["loginPassword"];
        $query_login = "SELECT adminOrUser, firstname,userId  FROM users where email='$loginemail' AND password='$loginPassword' ";
        $result_login = mysqli_query($conn, $query_login);
        $selected = mysqli_fetch_assoc($result_login);
        if($selected==true && $selected["adminOrUser"]==1){
            $url = "../admin/admin.php";
            header("location: $url");
        }else if($selected==true){
            session_start();
            $_SESSION["firstname"]=$selected["firstname"];
            $_SESSION["userId"]=$selected["userId"];
            $url = "../index.php";
            header("location: $url");
        }else{
            $incorrectLogin="no user vas found";
        }

    }
    if(isset($_POST["register"])){
        $firstName=$_POST["firstName"];
        $lastName=$_POST["lastName"];
        $email=$_POST["email"];
        $password=$_POST["password"];
    
        mysqli_query($conn, "INSERT INTO users(firstname, lastname, email,password) VALUES ('$firstName','$lastName','$email',$password)");

        session_start();
        $url = "login.php";
        header("location: $url");
    }
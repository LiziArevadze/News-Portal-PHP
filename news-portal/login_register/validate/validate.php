<?php
    $error=$errorpasswordMatch=$incorrectLogin="";
    if(isset($_POST["register"])){
        if($_POST["password2"]!=$_POST["password2"]){
            $errorpasswordMatch="enter same password";
        };
      
    }
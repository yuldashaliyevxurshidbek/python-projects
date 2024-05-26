<?php
include 'dbconnect.php';
if(!isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $phonenumber = $_POST['phonenumber'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $gender = $_POST['gender'];
    
    if($password == $confirm_password){
        $sql = "INSERT INTO users (firstname, lastname, email, username, phonenumber, password, confirm_password, gender) VALUES (:firstname, :lastname, :email, :username, :phonenumber, :password, :confirm_password, :gender)";
        $sqlinsert = $conn->prepare($sql);
        $result = $sqlinsert->execute([  
        ':firstname' => $firstname,
        ':lastname' => $lastname,
        ':email' => $email,
        ':username' => $username,
        ':phonenumber' => $phonenumber,
        ':password' => $password,
        ':confirm_password' => $confirm_password,
        ':gender' => $gender]);
        if($result){
            echo 'Successfully saved';
        }else{
            echo 'There were errors while saving data';
        }
      }else{
        echo "Password doesn't match";
      }
    
    }





   









?>
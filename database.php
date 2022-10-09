<?php


// handle login
if(isset($_POST["submit1"])){
    $email = htmlspecialchars($_POST["inlog-email"]);
    $pwd = htmlspecialchars($_POST["password"]);
    print_r($_POST);
    foreach($_POST as $post){
        echo $post. "<br>";
    }
    
}

//handle sign up
if(isset($_POST["submit2"])){
    $name = $_POST["voornaam"];
    $lastname = $_POST["achternaam"];
    $email2 = $_POST["aanmeld-email"];
    $pwd2 = $_POST["password2"];
    $pwdrepeat = $_POST["pwdrepeat"];

    $name = htmlspecialchars($name);
    $lastname = htmlspecialchars($lastname);
    $email2 = htmlspecialchars($email2);
    $pwd2 = htmlspecialchars($pwd2);
    $pwdrepeat = htmlspecialchars($pwdrepeat);
}

// SignupContr roepen



?>
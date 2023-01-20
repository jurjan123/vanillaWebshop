<?php
session_start();
DEFINE("USER", "root");

try{
    $verbinding = new PDO("mysql:host=localhost;dbname=WebshopDatabase", USER);
    $verbinding->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "succes";
}
catch(PDOException $e){
    echo $e->getMessage();
    echo "kon geen verbinding maken";
}





// handle login
if(isset($_POST["submit1"])){
    $email = htmlspecialchars($_POST["inlog-email"]);
    $pwd = htmlspecialchars($_POST["password"]);
    
    };
    

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

    if($pwdrepeat != $pwd2){
        $pwdsnotsame = "wachtwoorden komen niet overeen";
        echo "<div id='errorpwd'>" . $pwdsnotsame . "</div>"; 
    } else{
        $pwdhashed = password_hash($pwdrepeat, PASSWORD_DEFAULT);

        $sql = "Insert into users (id, first_name, last_name, email, password)
        values (null,?,?,?,?)";
        $stmt = $verbinding->prepare($sql);

        try{
            $stmt->execute(array(
                $name,
                $lastname,
                $email2,
                $pwdhashed
            ));
        } catch(PDOException $e){
            echo $e->getMessage();
            echo "foutje";
        }
        //$_SESSION["username"] = $name;
};


    }

    
// SignupContr roepen



?>
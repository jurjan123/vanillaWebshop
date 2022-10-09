<?php
require "dbclass.php";
class Signup extends dbh{
    
    public function checkUser($name, $email2){

        $stmt = $this->connect()->prepare("SELECT FIRST_NAME, email FROM people WHERE FIRST_NAME = ? OR email = ?");
        if(!$stmt->execute(array($name, $email2))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        } else{
            $stmt->execute(array($name, $email2));
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            foreach($stmt as $row){
                echo "<br>". $row["FIRST_NAME"], $row["email"];
            }
        }
        
        $resultcheck = false;
        if($stmt->rowCount() > 0){
            $resultcheck = false;
        }
        else{
            $resultcheck = true;
        }
        return $resultcheck;
    }
}

$name = new Signup;
$name->checkUser("Jur", "jansoniusjur@gmail.com");
?>
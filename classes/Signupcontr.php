<?php
include("signupclasses.php");
class SignupContr extends Signup{
    private $name;
    private $lastname;
    private $email2;
    private $pwd2;
    private $pwdrepeat;

    public function __construct($name, $lastname, $email2, $pwd2, $pwdrepeat){
        $this->$name = $name;
        $this->$lastname = $lastname;
        $this->$email2 = $email2;
        $this->$pwd2 = $pwd2;
        $this->$pwdrepeat = $pwdrepeat;
    }

    private function signupUser(){
        if($this->emptyInput() == false){
            header("location: ../index.php?error=emptyinput");
            exit();
            echo "hellp world";
        }
        if($this->invaliduid() == false){
            header("location: ../index.php?error=invaliduid");
            exit();
            echo "hellp world";
        }
        if($this->invalidEmail() == false){
            header("location: ../index.php?error=invalid-email");
            exit();
        }
        if($this->pwdMatch() == false){
            header("location: ../index.php?error=invalid-email");
            exit();
        }
        if($this->duplicateUser() == false){
            header("location: ../index.php?error=invalid-email");
            exit();
        }

        $this->setUser()
        
    }

    private function emptyInput() {
        $result = false;

        if(empty($this->uid) || empty($this->pwd) || empty($this->confirmpwd) || empty($this->email)) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

    // check that the username is valid
    private function invalidUid() {
        $result = false;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)){
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

    // checks for valid email
    private function invalidEmail() {
        $result = false;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

    // checks that the pwd and confirmpwd match
    private function pwdMatch() {
        $result = false;
        if ($this->pwd !== $this->confirmpwd) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

    private function duplicateUser() {
        $result = false;
        if(!$this->checkUser($this->uid, $this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}

    
       
        
    

    

?>
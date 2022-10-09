<?php
class dbh{
    protected function connect(){
        // creating database
    try{
        $db = new PDO('mysql:host=localhost;dbname=webshop;charset=utf8mb4', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//https://www.php.net/manual/en/pdo.setattribute.php
        //Check connection status
        echo $db->getAttribute(PDO::ATTR_CONNECTION_STATUS);
        return $db;
        
    }   
        // if not connected
    catch(PDOException $e) {
        echo $e->getMessage();
        echo "failure";
    }
  }
}

$GLOBALS["url"] = "jurjansonius.nl";
define("NAAM", "jur-jansonius");

?>

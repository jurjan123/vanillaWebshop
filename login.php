<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/login.css">
    <script>
        function uitloggen(){
            var loguit = confirm("weet u zeker dat u wilt uitloggen?");
            if(loguit){
                location.href("index.php");
            }
        }
    </script>
</head>
<body>
    <?php
    require("index.php");
    require("database.php");
    ?>

<div id="inlogveld">
<div id="inloggen">
    <h2>inloggen</h2>
    <form action="" method="post">
        E-mailadres <input required type="text" name="inlog-email" class="input_input">
        wachtwoord <input required type="password" name="password" class="input_input">
        <input type="submit" name="submit1" value="versturen" class="submit">
    </form>
</div>
<div id="aanmelden">
    <h2>aanmelden</h2>
    <form action="" method="post">
        voornaam <input required type="text" name="voornaam" class="input_input">
        achternaam <input required type="text" name="achternaam" class="input_input">
        E-mailadres <input required type="email" name="aanmeld-email" class="input_input">
        wachtwoord instellen <input required type="password" name="password2" class="input_input">
        wachtwoord herhalen <input type="text" name="pwdrepeat" class="input_input">
        <input type="submit" name="submit2" value="versturen" class="submit2"></button>
    </form>
</div>    
</div>        
    
</body>
</html>
<?php $con = new mysqli("localhost", "julianvd000", "", "User");  ?>

<?php
session_start();
unset($_SESSION["UserID"]);
session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="Master.css" type="text/css" />
        <link rel="stylesheet" href="Menu.css" type="text/css" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js"></script>
        <title>Register</title>
    </head>
    <body>
        <div class="Container">
            <div class="Header"></div>
            <div class="Menu">
                <nav>
                  <div>
                    <ul>
                      <li><a href="Register.php">Registeren</a></li>
                      <li><a href="Login.php">Login</a></li>
                    </ul>
                  </div>
                </nav>

            </div>
            <div class="LeftBody"></div>
            <div class="RightBody">Je bent uit gelogt</div>
            <div class="Footer"></div>
            
            
            
        </div>
    </body>
    
</html>
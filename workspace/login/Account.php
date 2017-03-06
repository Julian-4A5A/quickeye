<?php

$con = mysqli_connect("localhost", "julianvd000", "", "User");

?>
<?php
session_start();
if(isset($_SESSION['Voornaam'])){
    
}else{
    header('Location:Login.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="Master.css" type="text/css" />
        <link rel="stylesheet" href="Menu.css" type="text/css" />
        <title>Account</title>
    </head>
    <body>
        <div class="Container">
            <div class="Header">
                <h1 class="H1">Account</h1>
            </div>
            <div class="Menu">
                <nav>
                  <div>
                    <ul>
                      <li><a href="Account.php">Account</a></li>
                      <li><a href="UpdateAccount.php">Account Update</a></li>
                      <li><a href="Logout.php">Uitloggen</a> </li>
                    </ul>
                  </div>
                </nav>

            </div>
            <div class="LeftBody">
                <div class="FormElement" class="oefen">
                    <a href="Oefenspel.php"> <button class="button" onclick="oefen">Oefenen</button></a>
            
                </div>
                <div class="FormElement" class="wedstrijd">
                    <button class="button" onclick="wedstrijd">Wedstrijd</button>
                </div>
            </div>
            <div class="RightBody">
                <br>Jouw Account<br>
                <?php echo $_SESSION['Voornaam']?>
            </div>
            <div class="Footer"></div>
            
            
            
        </div>
    </body>
    
</html>
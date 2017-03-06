<?php

// $con = new mysqli("localhost", "julianvd000", "", "User");

?>
<?php

if (isset($_POST['Register'])){
    
    $con = mysqli_connect("localhost", "julianvd000", "", "User");
    
    session_start();
    $FName = $_POST['First_Name'];
    $LName = $_POST['Last_Name'];
    $Email = $_POST['Email'];
    $PW = $_POST['Password'];
    
    
    
    
    $sql = $con->query("INSERT INTO `User` (`Fname`, `Lname`, `Email`, `Password`) VALUES ('".$FName."','".$LName."','".$Email."','".$PW."')");
            
    
    header('Location: Login.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <style type="text/css">
            .LeftBody{
                width: 350px;
                float: left;
                height: 400px;
                background-image: url("back.jpg");
                background-repeat:no-repeat;
                background-position: center;
            }
        </style>
        <link rel="stylesheet" href="Master.css" type="text/css" />
        <link rel="stylesheet" href="Menu.css" type="text/css" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js"></script>
        <title>Register</title>
    </head>
    <body>
        <div class="Container">
            <div class="Header">
                <h1 class="H1">Quick Eye</h1>
            </div>
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
            <div class="RightBody">
                <form action="" method="post" name="RegisterForm" id="RegisterForm">
                    <div class="FormElement"> 
                        <input type="text" name="First_Name" required="required " class="TField" id="First_Name" placeholder="Voornaam" />
                    
                    </div>
                    <div class="FormElement">
                        <input type="text" name="Last_Name" required="required " class="TField" id="Last_Name" placeholder="Achternaam"  />
                    </div>
                    <div class="FormElement">
                        <input type="text" name="Email" required="required " class="TField" id="Email" placeholder="Email " />
                    </div>
                    <div class="FormElement">
                        <input type="password" name="Password" required="required " class="TField" id="Password" placeholder="Wachtwoord "/>
                    </div>
                    <div class="FormElement">
                        <input type="submit" type="button" name="Register" value="Registeren" class="button" id="Register"/>
                    </div>
                        
                </form>
            </div>
            <div class="Footer"></div>
            
            
            
        </div>
    </body>
    
</html>
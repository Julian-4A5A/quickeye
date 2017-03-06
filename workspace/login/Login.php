
<?php
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";


if(isset($_POST['Login'])) {
    
    
    $con = mysqli_connect("localhost", "julianvd000", "", "User");
    
    $EM = $_POST['Email'];
    $PW = $_POST['Password'];
    
    
    $result = $con->query("SELECT * FROM User where Email='$EM'");
    
    $row = $result->fetch_assoc();
    
    var_dump($row);
    

        
    
    
    session_start();
    
    $_SESSION['Voornaam'] = $row['Fname'];
    
    header('Location: Account.php');
}
else { 
    
    session_start();
    $_SESSION['LogInFail'] = 'Yes';
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
                background-image: url("back2.jpg");
                background-repeat:no-repeat;
                background-position: center;
            }
                        
        </style>
        <link rel="stylesheet" href="Master.css" type="text/css" />
        <link rel="stylesheet" href="Menu.css" type="text/css" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js"></script>
        <title>Login</title>
    </head>
    <body>
        <div class="Container">
            <div class="Header"><h1 class="H1">Quick Eye</h1></div>
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
                <form action="" method="post" name="Form1" id="Form1">
                    <?php if(isset($_SESSION['LogInFail'])){?>
                     <div class="FormElement">Login gefaald! Probeer opnieuw!</div>
                     <?php }?>
                    <div class="FormElement"> 
                    <input type="text" name="Email" required="required " class="TField" id="Email" placeholder="Email " />
                    </div>
                    <div class="FormElement"> 
                    <input type="password" name="Password" required="required " class="TField" id="Password" placeholder="Wachtwoord "/>
                    </div>
                    <div class="FormElement"> 
                    <input type="submit" type="button" name="Login" value="Login" class="button" id="Login"/>
                    </div>
                </form>
            </div>
            <div class="Footer"></div>
            
            
            
        </div>
    </body>
    
</html>
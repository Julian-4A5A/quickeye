<?php

$con = mysqli_connect("localhost", "julianvd000", "", "User");

?>
    
<?php
$User = $_SESSION['UserID'];

$result = $con->query("select * form User where UserID='$User' ");

foreach ($result->fetchAll(PDO::FETCH_ASSOC) as $row) {

session_start();

$_SESSION["FirstName"] = $row['Fname'];
$_SESSION["LastName"] = $row['Lname'];
$_SESSION["Email"] = $row['Email'];
$_SESSION["PW"] = $row['Password'];


if(isset($_POST['Update'])){

$UpdateFName = $_POST['FirstName'];
$UpdateLName = $_POST['LastName'];
$UpdateEmail = $_POST['Email'];
$UpdatePassword = $_POST['Password'];

$sql = $con->query("UPDATE User SET Fname = '{$UpdateFName }', Lname ='{$UpdateLName}', Email='{$UpdateEmail}', Password='{$UpdatePassword}' where UserID='{$User}'");

header('Location: UpdateAccount.php');

}
}
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
                      <li><a href="Account.php">Account</a></li>
                      <li><a href="UpdateAccount.php">Account Update</a></li>
                      <li><a href="Logout.php">Uitloggen</a> </li>
                    </ul>
                  </div>
                </nav>

            </div>
            <div class="LeftBody"></div>
            <div class="RightBody">
                <form name="form1" method="post" action="">
                    <div class="FormElement">
                        <input type="text" name="FirstName" required="required" class="TField" id="FirstName" value"<?php echo $_SESSION['FirstName'] ?>"  />
                    </div>
                    <div class="FormElement">
                        <input type="text" name="LastName" required="required" class="TField" id="LastName" value"<?php echo $_SESSION['LastName'] ?>"/>
                    </div>
                    <div class="FormElement">
                        <input type="text" name="Email" required="required"class="TField" id="Email"value"<?php echo $_SESSION['Email'] ?>"/>
                    </div>
                    <div class="FormElement">
                        <input type="text" name="Password" required="required"class="TField" id="Password" value"<?php echo $_SESSION['PW'] ?>"/>
                    </div>
                    <div class="FormElement">
                        <input type="submit" name="Update" value="Update Info" class="button" id="Update" />
                    </div>
                    </form>
                   
                
            </div>
            <div class="Footer"></div>
            
            
            
        </div>
    </body>
    
</html>
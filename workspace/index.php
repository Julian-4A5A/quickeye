<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css" type="text/css" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js"></script>
    </head>
    <body>
        <h1 id="Titel">Quick eye</h1>
        <form>
            <h2 id="Speler">Spelernaam:</h2>
            <input type="text" name="Gebruiker"/><br>
            <input class="input1" type="Submit" name="Oefenen" value="Oefenen"/><input class="input2" type="Submit" name="Wedstrijd" value="Wedstrijd" />
        </form>
        
        <?php
        
        if(isset($_POST['Gebruiker'] = "")){
            echo 'Naam invullen graag';
        }
        else if 
        ?>
    </body>
    
</html>
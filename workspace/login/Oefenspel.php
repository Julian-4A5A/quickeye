<?php
session_start();
$_SESSION['Voornaam'];


?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="Master.css" type="text/css" />
        <link rel="stylesheet" href="Menu.css" type="text/css" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="http://s3.amazonaws.com/codecademy-content/courses/hour-of-code/js/alphabet.js"></script>
        <title>OEFENEN</title>
    </head>
    <body onload="Go">
        <div id="naam">
        <p>Naam: <?php echo $_SESSION['Voornaam']?></p> 
        <a href="Account.php"><button class="button">Account</button></a>
        
        </div>
        <div id="tijd">
                        
        </div>
        <div id="spel">
              <div id="quick">
                  <table id="spel2">
                      <th>
                          <td onclick="vak(button=12)" id="button12" class="button1"></td>
                      </th>
                      <tr>
                    <td onclick="vak(this)" id="button0" class="button1"></td>
                    <td onclick="vak(this)" id="button1" class="button1"></td>
                    <td onclick="vak(this)" id="button2" class="button1"></td>
                </tr>
                <tr>
                    <td onclick="vak(this)" id="button3" class="button1"></td>
                    <td onclick="vak(this)" id="button4" class="button1"></td>
                    <td onclick="vak(this)" id="button5" class="button1"></td>
                </tr>
                <tr>
                    <td onclick="vak(this)" id="button6" class="button1"></td>
                    <td onclick="vak(this)" id="button7" class="button1"></td>
                    <td onclick="vak(this)" id="button8" class="button1"></td>
                </tr>
                <tr>
                    <td onclick="vak(this)" id="button9" class="button1"></td>
                    <td onclick="vak(this)" id="button10" class="button1"></td>
                    <td onclick="vak(this)" id="button11" class="button1"></td>
                </tr>
                     
                  </table>
              </div>      
        </div>
        
        <script type="text/javascript">
        function startGame() {
        $("#start_button").hide();
    
        var timeLeft = 30;
        var timerId = setInterval(countdown, 1000);
        
            // start de timer als de game begint, alles hangt af van deze timer
            function countdown() {
                if (timeLeft == 0) {
                    clearTimeout(timerId);
                // doSomething();
                } else {
                    document.getElementById("timer").innerHTML = timeLeft + ' seconden over!';
                    timeLeft--;
              }
            }
            
            
    }
            $(document).ready(function(){
                var i = 0;
            });
            $("#start").click(function(){
                var Getal1 = Math.floor((Math.random() * 12) + 1);
                var Getal2 = Math.floor((Math.random() * 100) + 1);
                document.getElementById("#button").innerHTML = Getal1;
                document.getElementById("#button").innerHTML = Getal2;
            });
            //maak een function die het bord maakt
            //genereer 4 eer een random hokje door een random getal tussen de 0 en 11 te maken
            //zet in dat hokje een random getal tussen de 1 en 9
            
            //onthoud die 4 getallen in een array
            //genereer een random getal tussen 0 en 3 en zet dat element uit je array in het bovenste vakje
            
            //maak een function die wordt uitgevoerd bij onclick (of met jquery) (vak)
            // komt de waarde van het bovenste veld overeen met de waarde van het geklikte veld, maak dan een nieuw soeelveld en hoog de score op
            //this.innerHTML = 
            
        </script>
    </body>
</html>

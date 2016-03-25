<!doctype html>
<html>
    <head>
    <title>
        EasySolution/Banking/SimpleInterest
    </title>
      <link type="text/css" rel="stylesheet" href="stylesheets\stylesheet2.css">
    </head>
    <body>
        <div float="left">
            <h2>Simple Interest :</h2>
        <h2>Formula : Simple Interest = (Principle )* (Rate of interest/100)*(No. of years)</h2><br>
        <h3>Derivation Links:</h3>
        <ul>
            <li><a href="https://www.google.co.in/webhp?sourceid=chrome-instant&ion=1&espv=2&ie=UTF-8#q=simple%20interest%20derivation" target="iframe_smart">MathExpression</a></li>
            <li><a href="http://www.emathzone.com/tutorials/business-math/concept-of-simple-interest.html" target="iframe_smart">Emathzone</a></li>
            <li><a href="http://math.stackexchange.com/questions/749816/proof-of-simple-interest-formula" target="iframe_smart">MathStackExchange</a></li>
        </ul>
        <iframe width="420" height="315" src="https://www.youtube.com/embed/6AZijeJDmgY" frameborder="0" allowfullscreen></iframe>
        </div>
        <div id="calci_color" height="400px" width="500px" float="right">
            <h2>Calculater : </h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                Enter Principle Amount in Rs:<br>
                <input type="text" name="firstnumber"> </input><br>
                Enter Rate of Interest in %:<br>
                <input type="text" name="secondnumber"></input><br>
                <input type="submit" name="submit" value="Calculate"></input>
            </form><br>
            <h3>Solution : </h3>Simple Interest : 
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") 
                {
                    $a=floatval($_POST["firstnumber"]);
                    $b=floatval($_POST["secondnumber"]);
                    
                    echo $a*$b*$n/100;
                }
                ?>
                Rs. 
        </div>
    </body>
</html>
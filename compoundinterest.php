<!doctype html>
<html>
    <head>
    <title>
        EasySolution/Banking/CompoundInterest
    </title>
      <link type="text/css" rel="stylesheet" href="stylesheets\stylesheet2.css">
    </head>
    <body>
        <div float="left">
            <h2>Compound Interest :</h2>
        <h2>Formula : <u>Compound Interest = (Principle )* (1+(Rate of interest/100))<sup>(No. of years)</u></sup></h2><br>
        <h3>Derivation Links:</h3>
        <ul>
            <li><a href="http://www.thecalculatorsite.com/articles/finance/compound-interest-formula.php" target="iframe_smart">The Calculater Site</a></li>
            <li><a href="https://en.wikipedia.org/wiki/Compound_interest" target="iframe_smart">Wikipedia</a></li>
            <li><a href="http://cs.selu.edu/~rbyrd/math/regular/" target="iframe_smart">CS.SELU</a></li>
        </ul>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/N_zOA5Gjcy8" frameborder="0" allowfullscreen></iframe>
        </div>
        <div id="calci_color" height="400px" width="500px" float="right">
            <h2>Calculater : </h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                Enter Principle Amount in Rs:<br>
                <input type="text" name="firstnumber"> </input><br>
                Enter Rate of Interest in %:<br>
                <input type="text" name="secondnumber"></input><br>
                Enter Total number of years:<br>
                <input type="text" name="secondnumber"></input><br>
                <input type="submit" name="submit" value="Calculate"></input>
            </form><br>
            <h3>Solution : </h3>compound Interest : 
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") 
                {
                    $a=floatval($_POST["firstnumber"]);
                    $b=floatval($_POST["secondnumber"]);
                    
                    echo $a*pow((1+($b/100)),n);
                }
                ?>
                Rs. 
        </div>
    </body>
</html>
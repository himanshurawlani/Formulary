<!doctype html>
<html>
    <head>
    <title>
        EasySolution/Maths
    </title>
      <link type="text/css" rel="stylesheet" href="stylesheets\stylesheet2.css">
    </head>
    <body>
        <div float="left">
            <h2>Square of subtraction of two numbers : </h2>
        <h2>Formula : (a+b)<sup>2</sup> = a<sup>2</sup>+b<sup>2</sup>+2*a*b</h2><br>
        <h3>Derivation Links:</h3>
        <ul>
            <li><a href="http://hubpages.com/education/Why-ab-2-a2b22ab" target="iframe_smart">HubPage</a></li>
            <li><a href="http://www.slideshare.net/fresherssite/why-is-ab2-a2b22ab" target="iframe_smart">SlideShare</a></li>
            <li><a href="https://www.youtube.com/watch?v=Ygkzh4sJOQE&ab_channel=MathsSmart" target="iframe_smart">Youtube</a></li>
        </ul>
        <iframe width="420" height="315" src="https://www.youtube.com/embed/EHRbiYqAv8o" frameborder="0" allowfullscreen></iframe>
        </div>
        <div id="calci_color" height="400px" width="500px" float="right">
            <h2>Calculater : </h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                Enter first number (a):<br>
                <input type="number" name="firstnumber"> </input><br>
                Enter second number(b):<br>
                <input type="number" name="secondnumber"></input><br>
                <input type="submit" name="submit" value="Calculate"></input>
            </form><br>
            <h3>Solution : </h3>(a+b)<sup>2</sup> : 
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") 
                {
                    $a=$_POST["firstnumber"];
                    $b=$_POST["secondnumber"];
                    echo ($a*$a)+($b*$b)+(2*$a*$b);
                }
                ?> 
        </div>
    </body>
</html>
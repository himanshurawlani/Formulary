<!doctype html>
<html>
    <head>
    <title>
        EasySolution/Maths/Gemetry/Circumference
    </title>
    </head>
    <body>
        <div float="left">
        <h2>Circumference of circle : </h2>
        <h2>Formula : 2*&#960*(radius of circle)</h2><br>
        <h3>Derivation Links:</h3>
        <ul>
            <li><a href="http://www.mathopenref.com/circumferencederive.html" target="iframe_smart">Maths open references</a></li>
            <li><a href="https://www.youtube.com/watch?v=riNAA-jx0u8&ab_channel=mathematicsonline" target="iframe_smart">Youtube</a></li>
            <li><a href="http://www.math-principles.com/2013/02/circle-circumference-derivation.html" target="iframe_smart">Math Principles</a></li>
        </ul>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/riNAA-jx0u8" frameborder="0" allowfullscreen></iframe>
        </div>
        <div height="400px" width="500px" float="right">
            <h2>Calculater</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                Enter radius of circle :<br>
                <input type="text" name="radius"> </input><br>
                <input type="submit" name="submit" value="Calculate"></input>
            </form><br>
            <h3>Solution : </h3>2*&#960*(radius) : 
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") 
                {
                    $a=$_POST["radius"];
                    $a=floatval($a);
                    echo (2*3.14*$a);
                }
                ?> 
        </div>
    </body>
</html>
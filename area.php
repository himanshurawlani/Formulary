<!doctype html>
<html>
    <head>
    <title>
        EasySolution/Maths/Gemetry/Circumference
    </title>
    </head>
    <body>
        <div float="left">
        <h2>Area of circle : </h2>
        <h2>Formula : &#960*(radius of circle)<sup>2</sup></h2><br>
        <h3>Derivation Links:</h3>
        <ul>
            <li><a href="http://www.mathopenref.com/circleareaderive.html" target="iframe_smart">Math Open Reference</a></li>
            <li><a href="https://www.youtube.com/watch?v=YokKp3pwVFc&ab_channel=mathematicsonline" target="iframe_smart">Youtube</a></li>
            <li><a href="http://www.basic-mathematics.com/proof-of-the-area-of-a-circle.html" target="iframe_smart">Basic Mathematics</a></li>
        </ul>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Sx-5YJbszuI" frameborder="0" allowfullscreen></iframe>
        </div>
        <div height="400px" width="500px" float="right">
            <h2>Calculater</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                Enter radius of circle :<br>
                <input type="number" name="radius"> </input><br>
                <input type="submit" name="submit" value="Calculate"></input>
            </form><br>
            <h3>Solution : </h3>&#960*(radius)<sup>2</sup> : 
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") 
                {
                    $a=$_POST["radius"];
                    $a=floatval($a);
                    echo (3.14*$a*$a);
                }
                ?> 
        </div>
    </body>
</html>
<!doctype html>
<html>
    <head>
    <title>
        EasySolution/Maths
    </title>
    </head>
    <body>
        <div width="100%" height="100%">
        <div width="600px" height="500px" float="left">
        <h2>Square of subtraction of two numbers : </h2>
        <h2>Formula : (a-b)<sup>2</sup> = a<sup>2</sup>+b<sup>2</sup>-2*a*b</h2><br>
        <h3>Derivation Links:</h3>
        <ul>
            <li><a href="http://kwiznet.com/p/takeQuiz.php?ChapterID=2875&CurriculumID=24&Num=4.23" target="iframe_smart">Kwiznet</a></li>
            <li><a href="https://en.wikipedia.org/wiki/Difference_of_two_squares" target="iframe_smart">Wikipedia</a></li>
            <li><a href="https://www.youtube.com/watch?v=TsaH0GR15V4&ab_channel=MathsSmart" target="iframe_smart">Youtube</a></li>
        </ul>
        <div style="width:100%;height:100%;width: 820px; height: 461.25px; float: none; clear: both; margin: 2px auto;">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/CS7Y_1gI5EQ" frameborder="0" allowfullscreen></iframe>
        </div>
        <div height="600px" width="500px" float="right">
            <h2>Calculater : </h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                Enter first number (a):<br>
                <input type="number" name="firstnumber"> </input><br>
                Enter second number(b):<br>
                <input type="number" name="secondnumber"></input><br>
                <input type="submit" name="submit" value="Calculate"></input>
            </form><br>
            <h3>Solution : </h3>(a-b)<sup>2</sup> : 
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") 
                {
                    $a=$_POST["firstnumber"];
                    $b=$_POST["secondnumber"];
                    echo ($a*$a)+($b*$b)-(2*$a*$b);
                }
                ?> 
        </div>
        <div>
    </body>
</html>
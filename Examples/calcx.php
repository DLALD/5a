<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <center><body>
        <form name="form_calc" action="calc2.php" method="post">
        <center><h1>calc v1.0</h1></center><br><br>
        <table border="1" align="center">
            <tr><td>number 1</td></tr>
            <tr><td><input type="number"name="n1"required></td></tr>
            <tr><td>number 2</td></tr>
            <tr><td><input type="number"name="n2"required></td></tr>
            <tr><td><button>add</button></td></tr>
            <?php
//calc v1.0
//Developer: Luis L.
//step1.get values from html form
$num1=$_POST["n1"];
$num2=$_POST["n2"];
$suma=$num1+$num2;
echo "<center><h3>".$suma."</h3></center>";
echo "<tr><td><h3>result</h3></td></tr>";
echo "<tr><td>".$suma."</td></tr>";
 ?>
        </table>
        </form>
    
    </body>
</head>
</center>
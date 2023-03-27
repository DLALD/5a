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
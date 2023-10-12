<html>
<head><title>switch program</title>
<like rel="stylesheet" href="style.css">
</head>
<body bgcolor="orange";>
    <form action="whle.php" method="POST">
        <label for="num2"><i><h1>i help you to write imposition,,,</h1></i></label><br>
        <label>how many times :</labele>
        <input type="text" name="num1" id="num1" placeholder="enter the number "><br><br>
        <label>write your text  :</labele>
        <input type="text" name="num2" id="num2" placeholder="write the text "><br>
        <input type="submit">
      <br><br>
</form>
<?php 
$num2 =$_POST["num2"];
$a=1;
$num1 =$_POST["num1"];
while($a<=$num1){
    echo "<span style='color: white ;'>$num2 </span><br>";
    $a++;
}
?>
</body>
</html>
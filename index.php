<html>
<head>
<meta charset="utf-8">
</head>
<body>
<h1>Var9</h1>
<h3>Task.1</h3>
<select>
<?php
for ($i=1900; $i=<2100; $i++){
echo ('<option>)';
echo ($i);
echo ('</option>');
}
?>
</select>
<h3>Task.2</h3>
<form method='POST' action="">
<p>A</p><input type="text" name="a">
<p>B</p><input type="text" name="b">
<p>C</p><input type="text" name="c">
<input type="submit" value="ok"
</form>
<?php
$a=$_POST["a"];
$b=$_POST["b"];
$c=$_POST["c"];

$b=$b*$b-4*$a*$c;
$x1=(-$b + sqrt($b)) /($a*2);
$x2=(-$b - sqrt($b)) /($a*2);

echo $x1;
echo $x2;

</body>
</html>

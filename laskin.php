<!DOCTYPE html>
<html lang="fi">
<meta charset="utf-8">
<title>Laskin</title>
</head>
<body>

<form method="post" attribute="post" action="laskin.php">
<h1>Laskin</h1>
<p>Ensimmäinen luku:<br/>
<input type="number" id="first" name="first"></p>
<p>Toinen luku:<br/>
<input type="number" id="second" name="second"></p>
<button type="radio" name="group1" id="add" value="add" checked="true"><p>Lisäys</p><br/>
<button type="radio" name="group1" id="subtract" value="subtract"><p>Vähennys</p><br/>
<button type="radio" name="group1" id="times" value="times"><p>Kerto</p><br/>
<button type="radio" name="group1" id="divide" value="divide"><p>Jako</p>
<br>
<button type="submit" name="answer" id="answer" value="answer">Laske</button><br/>
</form>

<p>Vastaus on: 
<?php
$first = $_POST['first'];
$second= $_POST['second'];
if($_POST['group1'] == 'add') {
echo $first + $second;
}
else if($_POST['group1'] == 'subtract') {
echo $first - $second;
}
else if($_POST['group1'] == 'times') {
echo $first * $second;
} 
else if($_POST['group1'] == 'divide') {
echo $first / $second;
}

?>
</p> 

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<form action="checkbox.php" method="POST">

<input type="checkbox" id="vehicle1" name="vehicle1" value="bike">
<label for="HTML">bike</label>
<input type="checkbox" id="vehicle2" name="vehicle2" value="car">
<label for="css">car</label>

<input type="submit">
</form>
</body>
</html>
<?php
function wyslij(){
$conn = mysqli_connect("localhost", "root", "", "5ina1");
echo "pierwszy checkbox: " . $_POST["vehicle1"];
echo "drugi checkbox: " . $_POST["vehicle2"];
mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<form action="" method="POST">
firstname:<input type="text" name="firstname"><br>
lastname:<input type="text" name="lastname"><br>
<input type="radio" id="css" name="fav_lang" value="HTML">
<label for="HTML">HTML</label><br>
<input type="radio" id="css" name="fav_lang" value="CSS">
<label for="css">css</label><br>
<input type="radio" id="css" name="fav_lang" value="JS">
<label for="js">js</label><br>
<input type="submit">
</form>
</body>
</html>
<?php
$conn = mysqli_connect("localhost", "root", "", "5ina1");

$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$fav_lang=$_POST["fav_lang"];

$sql = "INSERT INTO myguests (firstname, lastname, fav_lang) VALUES ('$firstname', '$lastname', '$fav_lang')";
if (mysqli_query($conn, $sql)) {
    echo "New record created sucsesfully";
} else {   
echo"error " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>

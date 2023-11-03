<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
   
    div{
        padding: 2px;
        margin-left: auto;
        margin-right: auto;
        width: 30%;
        border: 2px solid black;
    }

    body {
        color: red
    }
    label{
        color: black;
    }
    h2{
        color: black;
    }
</style>
<body>
<div>
    <?php $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";
    ?>
   * required field
   
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <br>
    <?php
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
        <label >Name:</label>
        <input type="text"  name="name" >
        <?php
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            if (!pref_match("/^[a-zA-Z-' ]*$", $name)){
                $nameErr = "Only letters allowed";
            }
        }
        ?>
       * <?php echo $nameErr;?>
    <br><br>
        <label>E-mail:</label>
        <input type="text"  name="email" >
        <?php
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }
        ?>
        * <?php echo $emailErr;?>
        <br><br>
   
        <label >Website:</label>
        <input type="text" name="website" >
        <?php
        if (empty($_POST["website"])) {
            $website = "";
        } else {
            $website = test_input($_POST["website"]);
            if (!preg_match("/\b(?:(?:https?|ftp):/\/\|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%?=~_|]/i", $website)) {
                $websiteErr = "Invalid URL";
            }
        }
        ?>
        <?php echo $websiteErr;?>
        <br><br>    
   
        <label >Comment:</label>
        <textarea type="textarea" rows="5" cols="40" name="comment" ></textarea>
        <?php
        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }
        ?>
        <?php echo $comment;?>
        <br><br>
   
        <label >Gender:</label>
        
                <input type="radio" name="gender" <?php if(isset($gender) && $gender=="female") echo "checked"?> value="female">
                <label >female</label>
            
                <input type="radio" name="gender" <?php if(isset($gender) && $gender=="male") echo "checked"?> value="male">
                <label >male</label>
          
                <input type="radio" name="gender" <?php if(isset($gender) && $gender=="other") echo "checked"?> value="other">
                <label >other</label>
                <?php
        if (empty($_POST["gender"])) {
            $gender = "gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }
        ?>
           * <?php echo $genderErr;?>
           <br><br>
           <input type="submit" name="submit" value="Submit">

           <h2>Your Input:</h2>
                </form>
</div>
</body>
</html>
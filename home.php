<?php
    include 'includes/connection.php';
    $name =  mysqli_real_escape_string($con, $_POST['Name']);
    $email =  mysqli_real_escape_string($con, $_POST['Email']);
    $password =  mysqli_real_escape_string($con, $_POST['Password']);
    $contact =  mysqli_real_escape_string($con, $_POST['Contact']);
    $city =  mysqli_real_escape_string($con, $_POST['City']);
    $address =  mysqli_real_escape_string($con, $_POST['Address']);

    // Check if all the fields are filled
    $required = array($name, $email, $password, $contact,$city,$address);
    foreach ($required as $field){
        if(strlen($field) == 0){
            echo "<h1>You left some field(s) empty</h1>";
            echo '<h3><a href = "signup.php">click here</a>to go back</h3>';
            die(mysqli_error($con));
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HELLO <?php echo "$name"; ?></h1>
</body>
</html>
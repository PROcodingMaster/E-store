<?php
    include 'includes/connection.php';
    $name =  mysqli_real_escape_string($con, $_POST['Name']);
    $email =  mysqli_real_escape_string($con, $_POST['Email']);
    $password =  mysqli_real_escape_string($con, $_POST['Password']);
    $contact =  mysqli_real_escape_string($con, $_POST['Contact']);
    $city =  mysqli_real_escape_string($con, $_POST['City']);
    $address =  mysqli_real_escape_string($con, $_POST['Address']);

    //Check if the entered email exist in DB or NOT ------------
    $email_check_query = "SELECT id FROM users WHERE email_id = '$email'";
    $email_check_result = mysqli_query($con, $email_check_query);
    $number_of_email = mysqli_num_rows($email_check_result);
    if ($number_of_email >0){
        echo "<h1>Email already exist.</h1>";
        echo '<h3><a href = "signup.php">click here</a> to go back</h3>';
        die(mysqli_error($con));
    }

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
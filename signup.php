<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    include 'includes/links.php';
    ?>
    <title>Sign Up</title>
</head>
<body>
    <?php 
        include 'includes/header.php';
    ?>
    <div class="row container-fluid">
        <div class="col-md-6">
            <img src="img/signuppage.jpg" class="container-fluid">
        </div>
        <div class="col-md-6 signup_col">
            <h1>SIGN UP</h1>
            <form action="home.php" method="post">
                <input type="text"  placeholder="Name" name="Name" pattern="[A-Za-z]{1,25}">
                
                
                <input type="text"  placeholder="Email" name="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                
                
                <input type="text"  placeholder="Password" name="Password"   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                
                
                <input type="text"  placeholder="Contact" name="Contact"pattern="[0-9]{10}">
                
                
                <input type="text"  placeholder="City" name="City" pattern="[A-Za-z]{,25}" >
                
                
                <input type="text"  placeholder="Address" name="Address" pattern="[A-Za-z]{,50}">
                

                <button type="submit" class="signup_submit">Submit</button>
            </form>
        </div>
    </div>

    
</body>
</html>
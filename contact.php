<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    include 'includes/links.php';
    ?>
    <title>Contact Us</title>
</head>
<body>
<?php 
    include 'includes/header.php';
  ?>
<div class="container">
    <!-------------------------------- Row 1 Start -------------------------------->
    
    <div class="row">
        <div class="col-md-9">
            <h1>LIVE SUPPORT</h1>
            <h3>24 hours | 7 days a week | 365 days a year technichal support</h3>
            <p>Finibus Bonorum et Malorum" (The Extremes of Good and Evil)
                by Cicero, written in 45 BC. This book is a treatise
                on the theory of ethics, very popular during the Renaissance. 
                The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..",
                comes from a line in section 1.10.32
                going through the cites of the word in classical 
                literature, discovered the undoubtable source. Lorem
                Ipsum comes from sections 1.10.32 and 1.10.33 of "de 
                Finibus Bonorum et Malorum" (The Extremes of Good and Evil)
                by Cicero, written in 45 BC.going through the cites of the word in classical 
                literature, discovered the undoubtable source. Lorem</p>
            
        </div>
        <div class="col-md-3">
            <img src="img/contact.png" class="container-fluid contact_img">
        </div>
    </div>
    <!-------------------------------- Row 1 End -------------------------------->

    <!-------------------------------- Row 2 Start -------------------------------->
    <div class="row">
        <div class="col-md-7 conatct_fields">
            <h1>CONATCT US</h1>
            <label for="contact_name">Name</label>
            <input type="text" size="70">
            <label for="contact_email">Email:</label>
            <input type="text" size="70">
            <label for="contact_message">Message:</label>
            <textarea name="contact_message" id="contact_message" cols="72" rows="6"></textarea>
            <input type="submit" name="Submit" class="contact_sibmit_button">

        </div>
        <div class="col-md-5 company_info">
            <h1>COMPANY INFORMATION:</h1>
            <p>
            RANDOM.ORG <br>
            Randomness and Integrity Services Ltd.<br>
            Premier Business Centres<br>
            8 Dawson Street<br>
            Dublin 2<br>
            D02 N767<br>
            Ireland<br>
            <br>
            <br>
            Skype: random.org<br>
            Web: www.random.org<br>
            Email: contact@random.org<br>
            <br>
            <br>
            Company Reg. No.	489434<br>
            </p>
        </div>
    </div>
    <!-------------------------------- Row 2 End -------------------------------->
</div>


<?php 
    include 'includes/footer.php';
  ?>
</body>
</html>
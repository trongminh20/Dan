<?php
    $pageTitle = "Famous Quotes";
    $page = "contact";
    include("./template/header.html");
?>

<div class="contact-container">
    <?php
    require 'gmail.php';
    
    if(isset($_POST['submit'])){
    $userEmail = strtolower($_POST['userEmail']);
    $email='trongminh20@gmail.com';    
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $subject_str = $subject." ".$userEmail; 
    
    gmail($email, $subject_str, $message);
    
    echo "<div class=\"\" id=\"mail-mess\" style=\"
        width: 100%;
        text-align: center;
        font-size:20px;
        color:#45ABFF;
    \"><p>Your message has been sent!!</p></div>";
    
    }else{
    ?>
    <!form method="POST" action="<?php $PHP_SELF; ?>">
    <form id="contact-form" action="" method="POST">
        <h3 id="contactus">Contact Us</h3>
       
        <input class="contact-input" type="email" name="userEmail" placeholder="Your email address" required="required">
        <br/>
        <br/>
        <input class="contact-input" type="text" name="subject" placeholder="Subject">
        <br/>    
        <hr/>
        <textarea class="contact-input-message" rows="10" cols="50" name="message" placeholder="Your message" required="required"></textarea>
        <br/>
        <input id="btn-send" type="submit" name="submit" value="Send Message">        
        
    </form>
</div>


<?php
    }
    include("./template/footer.html");
?>


   
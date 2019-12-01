<?php
if(isset($_POST['submit'])){
    $email = strtolower($_POST['userMail']);
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    gmail($toEmail, $subject, $message);
    
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


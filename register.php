<?php

include 'config.php';

if (isset($_POST['submit'])) {

   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
   $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
   $gender = mysqli_real_escape_string($conn, $_POST['gender']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));

   $select = mysqli_query($conn, "SELECT * FROM `user_info` WHERE email = '$email' AND password = '$pass'") or  die(mysqli_error($conn));

   if (mysqli_num_rows($select) > 0) {
      $message[] = 'user already exist!';
   } else {
      mysqli_query($conn, "INSERT INTO `user_info`(username, firstname, lastname, gender, email, password) VALUES('$username', '$firstname', '$lastname', '$gender', '$email', '$pass')") or die('query failed');
      $message[] = 'Registered Successfully!';
      header('location:login.php');
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register | Mobile Store</title>
   <link rel="stylesheet" href="css/style.css">
   <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
</head>

<body>

   <?php
   if (isset($message)) {
      foreach ($message as $message) {
         echo '<div class="message" onclick="this.remove();">' . $message . '</div>';
      }
   }
   ?>

   <div class="form-container">

      <form action="" method="post">
         <h3>Register Now</h3>
         <input type="text" name="username" required placeholder="Enter Username" class="box">
         <input type="text" name="firstname" required placeholder="Enter First Name" class="box">
         <input type="text" name="lastname" required placeholder="Enter Last Name" class="box">
         <input type="email" name="email" required placeholder="Enter Email" class="box">
         <input type="password" name="password" required placeholder="Enter Password" class="box">
         <input type="password" name="cpassword" required placeholder="Confirm Password" class="box">

         <fieldset>
            <legend>Select Your Gender</legend>
            <input type="radio" id="male" name="gender" value="male" required>
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female" required>
            <label for="female">Female</label>
         </fieldset>

         <input type="submit" name="submit" class="btn" value="Register Now">
         <p>Already have an account? <a href="login.php">Login Now</a></p>
      </form>

   </div>

</body>

</html>
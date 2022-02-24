<html>
<style>
        body {
  background-color: black;
  color: white;
}
</style>
<body>
<?php


if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
}



if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['department']) && !empty($_POST['tech']) && !empty($_POST['uname']) && !empty($_POST['pass']) && !empty($_POST['rpass']))
{
    echo 'Dear ';
    echo $_POST["fname"]; 
    echo " ";
    echo $_POST["lname"];
    echo '<br>';
    echo 'Congrats, You signed up for the club succesfully!';
}


else{
    echo "you didn't type your first name"; 
    echo '<br>';
    echo "you didn't type your last name"; 
    echo '<br>';
    echo "you didn't type your email ";  
    echo '<br>';
    echo "you didn't type your phone";  
    echo '<br>';
    echo "you didn't type your department";  
    echo '<br>';
    echo "you didn't select any tech";  
    echo '<br>';
    echo "you didn't type your username";  
    echo '<br>';
    echo "you didn't type your password"; 
    echo '<br>';
    echo 'agree to terms!';
}
 
 ?>
</body>
</html> 
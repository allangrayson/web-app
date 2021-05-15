<?php
require("config/config.php");
$errors = array();

if (isset($_POST['login'])) {
    if (!$_POST['username'] | !$_POST['password']) {
        array_push($errors, "All input fields are required");
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];

            $query = mysqli_query($connect ,"SELECT * FROM users WHERE username='$username'");
               $row =mysqli_fetch_assoc($query);
                 $email = $row['email'];
                
        $password = sha1(md5(urlencode($password.$email)));
       
            $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
            $query = mysqli_query($connect, $query);
            $num = mysqli_num_rows($query);

            if ($num == 1) {
                $_SESSION['email'] = $email;
                header("Location: index.php");
            } else {
                array_push($errors, "username or password incorrect");
            }
        
    }
}
?>
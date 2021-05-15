<?php
  require("config/config.php");
$errors = array();
if (isset($_POST['register'])) {
    if (!$_POST['phone'] | !$_POST['university_name'] | !$_POST['username'] | !$_POST['password1'] | !$_POST['password2']) {
        array_push($errors, "All input Fields are Required");
    } else {
        $email = urlencode($_POST['email']);
          $phone = $_POST['phone'];
          $university_name = $_POST['university_name'];
       

     
           

            $username = $_POST['username'];

           
                $query = "SELECT * FROM users WHERE username = '$username'";
                $query = mysqli_query($connect, $query);

                $number = mysqli_num_rows($query);
                if ($number > 0) {
                    array_push($errors, "The user with the username '$username' already exists, <a href='login.php'>log in</a> instead?");
                } else {
                    $password1 = $_POST['password1'];
                    $password2 = $_POST['password2'];

                    if ($password1 != $password2) {
                        array_push($errors, "Passwords don't match");
                    } else {
                        if (strlen($password1) < 8) {
                            array_push($errors, "Password should be at least 8 characters long");
                        } else {
                            $password1 = sha1(md5(urlencode($password1.$email)));
                            $query = "INSERT INTO users(email, phone, username, password, university_name, status) VALUES ('$email', '$phone', '$username', '$password1', '$university_name', 'PENDING')";

                            if (mysqli_query($connect, $query)) {
                                session_start();
                                $_SESSION['email'] = $email;
                                header("Location: login.php");
                                // exit();
                            } else {
                                echo mysqli_error($connect);
                                echo 'There was an error ' . $errors;
                            }
                        }
                    }
                }
            
            
    }
}

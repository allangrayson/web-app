<?php include 'style.php'; ?>
<?php    include('config/config.php');
include('session.php');
include('handlers/verification_handler.php');
?>
<div class="wrapper">
  <div class="container">
    <div class="col-left">
      <div class="login-text">
        <h2>Logo</h2>
        <?php
    if ($errors) {
        echo '<div class="error"><ul>';
        foreach ($errors as $value) {
            echo "<li>" . $value . "</li>";
        }
        echo '</ul></div>';
    }
    ?>
        <form method="post">
        <p>A verification code has been sent to <?php echo $user; ?>.</p>
        <p>Can't see email? <button style="color:black;" class="btn" name="resend">Resend</button></p>
    </form>
       
      
      </div>
    </div>
    <div class="col-right">
      <div class="login-form">
        <h2>Login</h2>
       
        <form method="POST">
          <p>
          <input type="text" size="8" name="code" placeholder="Enter Your verification Code" />
          </p>
          
          <p>
            <input name="verify" type="submit" class="btn"  value="verify" />
          </p>
         
          
        </form>
       
      </div>
    </div>
  </div>
  <div class="credit">
    Designed by <a href="https://htmlcodex.com">HTML Codex</a>
  </div>
</div>
<?php include 'style.php'; ?>
<?php     require("config/config.php");

require("handlers/recovery_check_handler.php");
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
       
      </div>
    </div>
    <div class="col-right">
      <div class="login-form">
        <h2>Recover Password</h2>
       
        <form method="POST">
          <p>
          <input type="email" required name="email" placeholder="Email Address">
          </p>
          
          <p>
            <input type="submit" name="recover" class="btn"  value="Recover Password" />
          </p>
         
          
        </form>
       
      </div>
    </div>
  </div>
  <div class="credit">
    Designed by <a href="https://htmlcodex.com">HTML Codex</a>
  </div>
</div>
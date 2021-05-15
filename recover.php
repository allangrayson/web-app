<?php include 'style.php'; ?>
<?php     require("config/config.php");
    require("handlers/recovery_handler.php"); ?>
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
    ?> <a class="btn" href="">Read More</a>
      </div>
    </div>
    <div class="col-right">
      <div class="login-form">
        <h2>Login</h2>
        <?php
        if (isset($_GET['email'])) {
            $email = $_GET['email'];

        ?>
        <form method="POST">
          <p>
          <input type="email" readonly name="email" value="<?php echo $email; ?>" require>
          </p>
          <p>
          <input type="text" inputmode="numeric" name="key" pattern="[0-9]*" placeholder="Recovery Key" require>
                                     </div>
          </p>
          <p>
          <input type="password" name="password1" placeholder="Password" require>
          </p>
          <p>
          <input type="password" name="password2" placeholder="Confirm Password" require>
          </p>
          
          <p>
            <input type="submit" name="recover" class="btn"  value="Recover Account" />
          </p>
         
          
        </form>
        <?php }
                                  else{

                                 
                                 ?>
                                  <form method="get">
                                  <p>
                <input type="email" name="email" placeholder="Email Address">
                                  </p>
                                  <p>
                <button type="submit">Proceed</button>
                                  </p>
            </form>

        <?php
        }
        ?>
      </div>
    </div>
  </div>
 
</div>
<?php include 'style.php'; ?>
<?php require("handlers/login_handlers.php"); ?>
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
        <h2>Login</h2>
        <form method="POST">
          <p>
            <input type="text" name="username" placeholder="Username"  required>
          </p>
          <p>
            <input type="password" name="password" placeholder="Password" required>
          </p>
          <p>
            <input class="btn" name="login" type="submit" value="Sing In" />
          </p>
          <p>
            <a href="change_password.php">Forget password?</a>
            <a href="register.php">Create an account.</a>
          </p>
        </form>
      </div>
    </div>
  </div>
 
</div>
                        </form>
                  </div>
                </div>
              </div>
           </div>
      </div> 
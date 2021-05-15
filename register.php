<?php include 'style.php'; ?>
<?php  require("handlers/register_handler.php"); ?>
<div class="wrapper">
  <div class="container">
    <div class="col-left">
      <div class="login-text">
        <h2>Logo</h2>
        <!-- <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget eros dapibus, ultricies tellus vitae, consectetur tortor. Etiam rutrum placerat
        </p> -->
        <?php
    if ($errors) {
        echo '<div class="error"><ul>';
        foreach ($errors as $value) {
            echo "<li>" . $value . "</li>";
        }
        echo '</ul></div>';
    }
    ?>
        <a class="btn" href="">Read More</a>
      </div>
    </div>
    <div class="col-right">
      <div class="login-form">
        <h2>Register</h2>
        <form method="POST">
          <p>
          <input type="text" size="8" name="email" placeholder="email" class="form-control"/>
          </p>
          <p>
            <input type="text" name="phone" placeholder="phone number" required>
          </p>
          <p>
            <input type="text" name="username" placeholder="username" required>
          </p>
         
          <p>
          <label>choose your universit</label>
       <select type="text" name="university_name" class="form-control" required>
           <option>IAA</option>
                    </select>
                                         </p>
          <p>
            <input type="password" name="password1" placeholder="password" required>
          </p>
          <p>
            <input type="password" name="password2" placeholder="confirm password" required>
          </p>
          <p>
            <input name="register" type="submit" class="btn"  value="register" />
          </p>
         
          <p>
            <a href="">Forget password?</a>
            <a href="">Create an account.</a>
          </p>
        </form>
      </div>
    </div>
  </div>
  <div class="credit">
    Designed by <a href="https://htmlcodex.com">HTML Codex</a>
  </div>
</div>
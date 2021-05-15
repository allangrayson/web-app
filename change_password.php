<?php include 'style.php'; ?>
<?php
include('config/config.php');
include('session.php');
include('handlers/change_password_handler.php');
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
        <a class="btn" href="">Read More</a>
      </div>
    </div>
    <div class="col-right">
      <div class="login-form">
        <h2>Change Password</h2>
        <form method="POST">
          <p>
          <input type="password" name="passOld" placeholder="Old Password" required>
          </p>
          <p>
          <input type="password" name="passNew1" placeholder="New Password">
          </p>
          <p>
          <input type="password" name="passNew2" placeholder="Confirm New Password">
          </p>
          <p>
            <input class="btn" type="submit" name="change" value="Change Password" />
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
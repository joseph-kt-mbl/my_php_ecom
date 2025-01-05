<!DOCTYPE html>
<html lang="en">
<title>OG Tech - Sign Up</title>
<?php include "header.php"; ?>

<form action="includes/signup.inc.php" class='auth-form signup-form' method="POST">
  <div class="container">
    <h2>Sign Up</h2>
    <div class='auth-details'>
          <div class="input-field">
            <input name="username" id="username" type="text" class="validate white-text" minlength="5" maxlength="12" placeholder='username...'>
            <img src="./static/images/user.png" alt="">
            <small class="helper-text grey-text left-align" data-error="Min 5, Max 12 characters" data-success="Min 5, Max 12 characters">Min 5, Max 12 characters</small>
          </div>
          <div class="input-field" id='pwd'>
            <input name="pwd" type="password"  minlength="8" maxlength="20" placeholder='password..'>
            <img src="./static/images/view.png" alt="">
            <small data-error="Min 8, Max 20 characters" data-success="Min 8, Max 20 characters">Min 8, Max 20 characters</small>
          </div>
          <div class="input-field">
            
            <input name="repeat_pwd" id="repeat_pwd" type="password" placeholder='retype password here ..'>
          </div>
        
          <div class="input-field">
            <input name="email" id="email" type="email" class="validate white-text" maxlength="25" placeholder='email..'>
            <img src="./static/images/mail.png" alt="">
            <small  data-error="wrong" data-success="correct"></small>
          </div>
        <input class="btn" type="submit" name="submit" value="Sign Up">
        <div class="errormsg">
          <?php
            if (isset($_GET["error"]))
            {
              if ($_GET["error"] == "empty_input")
                echo "<p>*Fill in all fields!<p>";

              else if ($_GET["error"] == "invalid_uid")
                echo "<p>*Choose a proper username!</p>";

              else if ($_GET["error"] == "passwords_dont_match")
                echo "<p>*Passwords doesn't match!</p>";

              else if ($_GET["error"] == "username_taken")
                echo "<p>*Username/Email already taken!</p>";
                
              else if ($_GET["error"] == "none")
                echo "<p class='green-text bold'>You have signed up! Please go to Login page</p>";
                echo '<META HTTP-EQUIV="Refresh" Content="2; URL=login.php">';
                exit();
            }
          ?>
        </div>
      </div>
    </div>
  </div>
</form>


<script>
  document.addEventListener('DOMContentLoaded', () => {
  const pwdField = document.getElementById('pwd')
  const pwdFieldInput = pwdField.querySelector('input')
  const toggleIcon = pwdField.querySelector('img');

  toggleIcon.addEventListener('click', () => {
    const isPassword = pwdFieldInput.getAttribute('type') === 'password';
    pwdFieldInput.setAttribute('type', isPassword ? 'text' : 'password');
    
      toggleIcon.src = isPassword ? './static/images/view.png' : './static/images/hide.png'
  });
});

</script>

<?php include "footer.php"; ?>
</html>
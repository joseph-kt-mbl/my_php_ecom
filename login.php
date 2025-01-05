<!DOCTYPE html>
<html lang="en">
<title>OG Tech PC - Login</title>

<?php include "header.php"; ?>

<form method="POST" class='auth-form login-form' action="includes/login.inc.php">
  <div class="container">
    <h2>Login</h2>
    <div class='auth-details'>
          <div class="input-field">
            <input type="text" name="username" id="username" placeholder='username or email here..'>
            <img src="./static/images/user.png" alt="">
          </div>
        
          <div class="input-field" id='pwd'>
            <input type="password" name="pwd" id="pwd" placeholder='password here..'>
            <img src="./static/images/view.png" alt="">
          </div>
          <div class='login-signup'>
            <button type="submit" name="submit" class="btn">Login</button>
            <a href="signup.php">Sign Up!</a>
          </div>
          <div class="errormsg">
            <?php
              if (isset($_GET["error"]))
              {
                if ($_GET["error"] == "empty_input")
                  echo "<p>*Fill in all fields!</p>";
                else if ($_GET["error"] == "WrongLogin")
                  echo "<p>*Incorrect credentials!</p>";
                else if ($_GET["error"] == "usernotfound")
                  echo "<p>*User does not exists!</p>";
                else if ($_GET["error"] == "stmtfailed")
                  echo "<p>*SQL ERROR! Try Again Later.</p>";
                else if ($_GET["error"] == "attemptReached")
                  echo "<p>*Too many failed login attempts! Try again after 15 seconds.</p>";
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

<script>
            const menu_btn = document.getElementsByClassName('menu-btn')[0];
              menu_btn.addEventListener('click', () => {
                const navUL = document.getElementsByClassName('nav-items')[0];
                const navWrapper = document.getElementsByClassName('nav-wrapper')[0];
                const root = document.getElementsByClassName('root-wrapper')[0];

            const img = menu_btn.querySelector('img');
            const src = img.src
            if (src.includes('menu.png')) {
              
              img.setAttribute('src', './static/images/close.png');
              navUL.classList.add('small-screen-menu')
              navWrapper.classList.add('small-screen-nav')
              root.classList.add('small-screen-root')


            } else if (src.includes('close.png')) {
              navUL.classList.remove('small-screen-menu')
              navWrapper.classList.remove('small-screen-nav')
              root.classList.remove('small-screen-root')
              img.setAttribute('src', './static/images/menu.png');
            }
          });

          

        </script>

<?php include "footer.php"; ?>
</html>

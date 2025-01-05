<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script type="text/javascript" src="static/js/pagination.js"></script>
  <script type='text/javascript' src='static/js/control.js'></script>
  <script src="https://kit.fontawesome.com/72adb2937a.js" crossorigin="anonymous"></script>
  <!-- Linking to base.css -->
  <link rel="stylesheet" href="./static/css/base.css">
  <link rel="icon" type="image/png" style="border-radius: 50%;" href="./static/logoicon.png">
</head>

<?php
  require_once "includes/class_autoloader.php";
  session_start();

  if (isset($_SESSION["Member"])) {
    $member = $_SESSION["Member"];
    $member = Member::CreateMemberFromID($member->getMemberID());
    $_SESSION["Member"] = $member;
    $memberID = $member->getMemberID();
    $username = $member->getUsername();
    $email = $member->getEmail();
    $privilegeLevel = $member->getPrivilegeLevel();
    $cart = $member->getCart();
    $orderItemCount = count($cart->getOrderItems());
    $orders = $member->getOrders();
  }

?>

  <nav class='nav'>
    <div class="nav-wrapper" style="box-shadow: 0px 0px 2px white;">
      <a href="index.php" class='logo-link'>
        <img src = "./static/logo.jpg" alt="logo" id="logo" class="logo glow-image" height="100"/>
        <h1>Zship</h1> 
      </a>
      <ul  class="nav-items">
        <li class='search-bar-container'>
          <form action="product_catalogue.php" class='search_form'>
              <input type="text" name="query" placeholder="Browse products..."
                class="search_bar"
                value="<?php if (isset($_GET["query"])) echo($_GET["query"]); ?>"
              />
              <button type='submit' class='submit-btn'>
                <i class='material-icons'>search</i>
              </button>
          </form>
        </li>
        <?php
          if (isset($_SESSION["Member"]))
          { ?>
          <?php if ($privilegeLevel == 1)
            echo("<li><a class='admin admin_manage_users admin_view_orders' href='admin.php' target='_blank'>Admin Panel</a></li>");
          echo
            ("
            <li>
              <a class='cart' href='cart.php?member_id=$memberID'>
                Cart<span class='new badge unglow' id='cart_badge'>$orderItemCount</span></a>
            </li>
            <li><a class='manage_profile' href='manage_profile.php?email=$email'>Manage Profile</a></li>
            <li><a href='includes/logout.inc.php'>Logout</a></li>
            ");
          } else
          {
            echo(
              "
              <li><a class='login' href='login.php'>Login</a></li>
              <li><a class='signup' href='signup.php'>Sign Up</a></li>
            ");
          }
          ?>
      </ul>
      <button class='menu-btn'>
        <img src="./static/images/menu.png" alt="">
      </button>
    </div>
  </nav>
  
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
</html>
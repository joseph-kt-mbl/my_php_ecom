<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel='stylesheet' href='./static/css/style.css' />
  <link rel='stylesheet' href='./static/css/footer.css' />
</head>
<body>
  
<footer class="footer">
  <div class="footer-container poppins-regular">
    <!-- Support -->
    <div class="footer-section">
      <h4 >Support</h4>
      <ul>
        <li><a href='aboutUs.php' class=' bold'>About Us</a></li>
        <li class='devider' tabindex='-1'></li>
        <li><a href='warranty_page.php' class=' bold'>Warranty</a></li>
        <li class='devider' tabindex='-1'></li>
        <li><a href='contactUs.php' class=' bold'>Contact Us</a></li>
      </ul>
    </div>

    <!-- Customer Service -->
    <div class="footer-section">
      <h4>Customer Service</h4>
      <ul>
        <li><a href="#">FAQs</a></li>
        <li><a href="#">Return Policy</a></li>
        <li><a href="#">Shipping Info</a></li>
        <li><a href="#">Track Order</a></li>
      </ul>
    </div>

    <!-- Account Links -->
    <div class="footer-section">
      <h4>My Account</h4>
      <ul>
        <?php
        if (isset($_SESSION["Member"])) {
          echo "
            <li><a href='manage_profile.php?email={$email}' class='bold'>Manage Profile</a></li>
            <li><a href='includes/logout.inc.php' class='bold'>Logout</a></li>
          ";
        } else {
          echo "
            <li><a href='login.php' class='bold'>Login</a></li>
            <li><a href='signup.php' class='bold'>Sign Up</a></li>
          ";
        }
        ?>
        <li><a href="#">Wishlist</a></li>
        <li><a href="#">Order History</a></li>
      </ul>
    </div>

    <!-- Social Media -->
    <div class="footer-section">
      <h4>Follow Us</h4>
      <div class="social-links">
        <a href="#" target="_blank" aria-label="Facebook">&#x1F426;</a>
        <a href="#" target="_blank" aria-label="Twitter">&#x1F426;</a>
        <a href="#" target="_blank" aria-label="Instagram">&#x1F426;</a>
        <a href="#" target="_blank" aria-label="LinkedIn">&#x1F426;</a>
      </div>
    </div>
  </div>

  <!-- Footer Bottom -->
  <div class="footer-bottom">
    <p>&copy; 2025 Your E-commerce Store. All rights reserved.</p>
    <button id="back-to-top">Back to Top</button>
  </div>
</footer>


<!-- JavaScript -->
<script>
  document.getElementById('back-to-top').addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
</script>

</body>
</html>

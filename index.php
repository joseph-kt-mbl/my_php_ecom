<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OG Tech PC - Landing Page</title>
  <?php 
    require "header.php"; 
    require_once "includes/class_autoloader.php";

    // database initialization
    $dbinit = new InitDB();
    $dbinit->initDbExec();
  ?>
</head>
<body>
  <div class='root-wrapper'>
    <div class="root-grid">
      <div class="black_mask_container">
        <div class='black_mask'>
          <img src="./static/images/2.jpg" alt="cover">
          <div class='on-top'>
            <h1>Discover Your Style</h1>
            <p>Shop the latest trends and timeless classics, crafted for every moment.</p>
          </div>
          <div class='mask'></div>
        </div>
        <div class='first_object'>
          <img src="./static/images/deep_1.png" alt="">
        </div>
        <div class='second_object'>
          <img src="./static/images/camera-3D.png" alt="">
        </div>
      </div>

    </div>
  </div>
  <?php require "footer.php"; ?>
</body>

<script>
  $(document).ready(function(){
    // carousel autoswipe
    $('.slider').slider({full_width: true});

    // counter
    $('.count').each(function () 
    {
      $(this).prop('Counter',0).animate({
        Counter: $(this).text()
      }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) { $(this).text(Math.ceil(now)); }
      });
    });
  });
</script>
</html>
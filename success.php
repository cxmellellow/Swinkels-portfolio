<?php include 'includes/header.php' ?>
<section>
    <h1>Message Sent!</h1>
    <p>Our records show you have submitted the following:<br>
      Name: <?php echo htmlspecialchars($users_name, ENT_QUOTES, 'UTF-8'); ?><br>
      Email: <?php echo htmlspecialchars($users_email, ENT_QUOTES, 'UTF-8'); ?><br>
      Reason: <?php echo htmlspecialchars($users_reason, ENT_QUOTES, 'UTF-8'); ?><br>
      Message: <?php echo htmlspecialchars($users_comment, ENT_QUOTES, 'UTF-8'); ?><br>
    </p>
    <p>You'll be redirected to home page after 5 seconds.</p>
    <div></div> <!-- Loading animation, do not delete-->
  </section>
  <script type="text/javascript">
    var timer = 5; //seconds
    website = "/index.php"
    function delayer() {
      window.location = website;
    }
    setTimeout('delayer()', 1000 * timer); 
  </script>

<?php include 'includes/footer.php'?>
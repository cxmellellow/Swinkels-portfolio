<!DOCTYPE html>
<html lang="en">
<head>
<meta content="charset=uft-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Christine Swinkels</title>
    
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="scripts/nav.js" type="text/javascript"></script>
<!--    <script  src='scripts/modalc.js' type='text/javascript'></script>-->
    <script  src='scripts/modal.js' type='text/javascript'></script>
    <script src='scripts/external-popup.js' type='text/javascript'></script>
    
    <!-- links for the modal window-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<!--    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">-->
    
    <link href="css/styles.css"  type="text/css" rel="stylesheet" />
    
    <link rel="icon" href="img/portfolio-favicon.jpg" type="image/jpg" sizes="16x16"/>
    
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body class="php">
  <section>
    <h1>Message Sent!</h1>
    <p>Our records show you have submitted the following:<br>
      Name: <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?><br>
      Email: <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?><br>
      Subject: <?php echo htmlspecialchars($subject, ENT_QUOTES, 'UTF-8'); ?><br>
      Message: <?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?><br>
    </p>
    <p>You'll be redirected to home page after 5 seconds.</p>
    <div></div> <!-- Loading animation, do not delete-->
  </section>
  <script type="text/javascript">
    var timer = 5; //seconds
    website = "../index.php"
    function delayer() {
      window.location = website;
    }
    setTimeout('delayer()', 1000 * timer); 
  </script>
  
</body>
</html>
<?php
    // define variables and set to empty values
    $name = $email = $reason = $comment =  "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = test_input($_POST["name"]);
      $email = test_input($_POST["email"]);
      $reason = test_input($_POST["website"]);
      $comment = test_input($_POST["comment"]);

    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>
<?php
  session_start();
  /**
   * If the login credentials are correct then move to assignment no. 5
   * Otherwise stay at the login page.
   */
  if($_POST['name'] === "Kunal" && $_POST['pass'] ==="12345" ) {
      $_SESSION["logged"] = TRUE;
      $_SESSION['name'] = $_POST['name'];
      $_SESSION['pass'] = $_POST['pass'];
      header('Location: ../assignment5/index.php');
  }
  else {  
    header("location: login.php");
  }
?> 

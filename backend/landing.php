<!DOCTYPE html>
<html> 
  <head>
    <title>Landing</title>
    <link rel="stylesheet" href="style.css">
  </head>
<body>
  <?php
      session_start();
      if(isset($_SESSION['jwtToken']) && !empty($_SESSION['jwtToken'])){
        echo "<div class='topnav'>";
        echo "<a href='#'>Profile</a>";
        echo "<a href='logout.php'>Logout</a>";
        echo "</div>";
        echo "<p>Welcome to the landing page, " . $_SESSION['username'] . "</p>";
      } else {
        header("Location: login.html");
        exit();
      }
    ?>
</body>
</html>
<!DOCTYPE html>
<html>
<body>
  <table>
    <?php
    if(isset($_SESSION['login']))
    {
     echo "<div align=\"right\"><strong class=\"txt\"><a href=\"index.php\"> Home </a>|<a href=\"signout.php\">Signout</a></strong></div>";
     }
     else
     {
      echo "&nbsp;";
     }
     error_reporting(0);
    ?>
  </table>
  
</body>
</html>



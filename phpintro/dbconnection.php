<html><body><?php
  function openfun()
  {
      $dbhost="localhost";
      $dbuser="root";
      $dbpass="1234";
      $db="student";
      $conn=new mysqli($dbhost,$dbuser,$dbpass,$db) or die("connection failed.\n$conn->error");
      return $conn;
  }
  function closecon($conn)
  {
      $conn->close();
  }
?></body>
</html>
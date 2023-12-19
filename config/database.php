

<?php
function connectdb() {
  $servername = "localhost";
  $port = "3307";
  $username = "root";
  $password = "";

  try {
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=shop-leo", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
  } catch(PDOException $e) {
    // echo "Connection failed: " . $e->getMessage();
  }
  return $conn;
}
// $conn=connectdb();
// var_dump($conn);
?>
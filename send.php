<?php
  $data = $_POST['data'];
  file_put_contents('logs/log.txt', $data, FILE_APPEND);
?>
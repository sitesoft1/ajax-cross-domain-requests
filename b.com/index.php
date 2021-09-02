<?php
header('content-type: application/json');

echo '{"foo":"bar"}';

  file_put_contents(__DIR__ . '/test_GET_data.txt', var_export($_GET, true));
  file_put_contents(__DIR__ . '/test_POST_data.txt', var_export($_POST, true));
?>
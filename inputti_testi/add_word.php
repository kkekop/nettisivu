<?php
  if (isset($_POST["word"])) {
    $word = $_POST["word"];
    $file = fopen("words.csv", "a");
    fwrite($file, $word . "\n");
    fclose($file);
  }
?>

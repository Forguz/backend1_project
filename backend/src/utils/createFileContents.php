<?php
  function createFileContents($FILE_PATH) {
    if(file_exists($FILE_PATH)) {
      return $file_content = file_get_contents($FILE_PATH);
    } else {
      $file = fopen($FILE_PATH, 'a+');
      fwrite($file, '[]');
      fclose($file);
      return $file_content = file_get_contents($FILE_PATH);
    }
  }
?>
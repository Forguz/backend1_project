<?php
  function base64url_encode($str) {
    return rtrim(strtr(base64_encode($str), '+/', '-_'), '=');
  }
?>
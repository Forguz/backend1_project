<?php
  $rootDir = realpath($_SERVER["DOCUMENT_ROOT"]);
  require $rootDir . '/services/authenticateUserService.php';
  header("Content-Type: application/json;charset=utf-8");

  $request = file_get_contents('php://input');
  $user_data = json_decode($request);

  try {
    $jwt = authenticateUserService($user_data);
    echo $jwt;
  } catch (Exception $err) {
    http_response_code($err->getCode());
    echo json_encode(array("error" => $err->getMessage()));
  }
?>
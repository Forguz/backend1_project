<?php
  require __DIR__ . '/services/createUserService.php';
  header("Content-Type: application/json;charset=utf-8");

  $request = file_get_contents('php://input');
  $user_data = json_decode($request);

  try {
    $created_user = createUserService($user_data);
    echo json_encode($created_user);
  } catch (Exception $err) {
    http_response_code($err->getCode());
    echo json_encode(array("error" => $err->getMessage()));
  }
?>
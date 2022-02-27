<?php
  function authenticateUserService($email, $password) {
    $rootDir = realpath($_SERVER["DOCUMENT_ROOT"]);
    $USERS_PATH = $rootDir . '/files/users.json';

    $users_file_content = createFileContents($USERS_PATH);
    $users = json_decode($users_file_content, true);

    if(isset($email) && !empty($password) && isset($password) && !empty($password)) {
      foreach($users as $user) {
        if($user["email"] == $email && password_verify($password, $user["password"])) {
          throw new Exception('User already exists.', 409);
          break;
        }
      }
      throw new Exception('Incorrect email/password combination.', 401);
    }
  }
?>
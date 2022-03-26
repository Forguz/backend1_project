<?php
  function authenticateUserService($email, $password) {
    $rootDir = realpath($_SERVER["DOCUMENT_ROOT"]);
    require $rootDir . '/utils/generateJWT.php';
    $USERS_PATH = $rootDir . '/files/users.json';
    
    $users_file_content = createFileContents($USERS_PATH);
    $users = json_decode($users_file_content, true);
    
    if(isset($email) && !empty($email) && isset($password) && !empty($password)) {
      foreach($users as $user) {
        if($user["email"] == $email && password_verify($password, $user["password"])) {
          $headers = array('alg'=>'HS256','typ'=>'JWT');
          $payload = array('sub'=>'1234567890','email'=>$email, 'exp'=>(time() + 60 * 60 * 24));
          return json_encode(array('jwt'=>generate_jwt($headers, $payload));
          break;
        } else {
          throw new Exception('Invalid email/password combination.', 409);
        }
      }
      throw new Exception('Incorrect email/password combination.', 401);
    }
  }
?>
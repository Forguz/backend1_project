<?php
function createUserService($user_data) {
    $rootDir = realpath($_SERVER["DOCUMENT_ROOT"]);
    require $rootDir . '/utiles/createFileContents.php';
    require $rootDir . '/models/User.php';
    $USERS_PATH = $rootDir . '/files/users.json';

    $users_file_content = createFileContents($USERS_PATH);

    $users = json_decode($users_file_content, true);
    
    if(isset($users) && !empty($users)) {
      foreach($users as $user) {
        if($user["email"] == $user_data->email) {
          throw new Exception('User already exists.', 409);
          break;
        }
      }
    }

    $created_user = new User($user_data->name, $user_data->email, $user_data->password);
    array_push($users, $created_user);
  
    file_put_contents($USERS_PATH, json_encode($users));

    return $created_user;
  }
?>
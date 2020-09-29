<?php 


  $errors  = array();
  $name    = '';
  $email   = '';
  $message = '';
  
  if(!empty($_POST)){
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $message = $_POST['message'];
    if($name === ""){
        $errors['name'] = "名前が入力されていません。";
    }
    if($email === ""){
        $errors['email'] = "メールアドレスが入力されていません。";
    }
    if($message === ""){
        $errors['message'] = "内容が入力されていません。";
    }
    if(empty($errors)){
      $_SESSION['name']    = $name;
      $_SESSION['email']   = $email;
      $_SESSION['message'] = $message;
      var_dump($_SESSION);
      header('Location: ./input_confirmation.php');
      exit();
    }
  }
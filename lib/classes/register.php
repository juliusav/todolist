<?php

class RegisterView {
  function generate() {
    echo (
      "<div class='register menu-view' style='display: none'>
        <form>
          <input class='email-register' type='text' name='email' placeholder='Email'>
          <input class='password-register' type='text' name='password' placeholder='Password'>
          <input class='submit' type='submit' value='Register'>
        </form>
        <span class='login btn'>I want to log in. <i class='fa fa-smile-o'></i></span>
      </div>"
    );
  }

  function createAccount() {
    $u = trim($_POST['email']);
    $v = sha1(time());
  }
}

?>
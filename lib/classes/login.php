<?php

class LoginView {
  function generate() {
    echo (
      "<div class='login menu-view' style='display: block'>
        <form>
          <input class='email' type='text' name='email' placeholder='Email'>
          <input class='password' type='text' name='password' placeholder='Password'>
          <input class='submit' type='submit' value='Log In'>
        </form>
        <span class='forgot btn'>I forgot my password. <i class='fa fa-frown-o'></i></span>
        <br />
        <span class='register btn'>I want to sign up. <i class='fa fa-smile-o'></i></span>
      </div>"
    );
  }
}

?>
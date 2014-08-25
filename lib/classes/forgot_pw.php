<?php

class ForgotPWView {
  function generate() {
    echo (
      "<div class='forgot-pw menu-view' style='display: none'>
        <form>
          <input class='email-confirm' type='text' name='email' placeholder='Email'>
          <input class='submit' type='submit' value='Send Email'>
        </form>
        <span class='login btn'>I want to log in. <i class='fa fa-smile-o'></i></span>
        <br />
        <span class='register btn'>I want to sign up. <i class='fa fa-smile-o'></i></span>
      </div>"
    );
  }
}

?>
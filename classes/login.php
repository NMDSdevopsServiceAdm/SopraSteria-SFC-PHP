<?php

  class Login {

    public $username;
    public $password;

    public function __construct($username = '', $password = '') {
      $this->username = $username;
      $this->password = $password;
    }

  }

?>
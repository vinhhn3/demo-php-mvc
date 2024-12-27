<?php

class AuthService{
  private $emailService = new EmailService();

  public function register($email, $password){
    // register user

    $this->emailService->send($email);
  }

}
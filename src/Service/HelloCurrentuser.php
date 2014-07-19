<?php
namespace Drupal\hello\Service;

class HelloCurrentuser {
  protected $currentUser;
   
  public function __construct() {
    $this->currentUser = \Drupal::currentUser()->getUsername();
  }
   
  public function getCurrentuser() {
    return $this->currentUser;
  }
}
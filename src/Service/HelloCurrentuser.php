<?php
namespace Drupal\hello\Service;

class HelloCurrentuser {
  protected $currentUser;
   
  public function __construct() {
    //print_r(\Drupal::currentUser());
    print_r(\Drupal::currentUser()->getUsername());
    $this->currentUser = \Drupal::currentUser()->getUsername();
  }
   
  public function getCurrentuser() {
    return $this->currentUser;
  }
}
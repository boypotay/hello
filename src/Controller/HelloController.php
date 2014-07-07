<?php
namespace Drupal\hello\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;

class HelloController extends ControllerBase {
  protected $helloService;
  
  public function __construct($helloService) {
    $this->helloService = $helloService;
  }
  
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('hello.currentuser')
    );
  }
  
  public function drupal8Render() {
    print $this->helloService->getCurrentuser();
    return array(
      '#markup' => t('Hello @user', array('@user' => $this->helloService->getCurrentuser()))
    );
  } 
}
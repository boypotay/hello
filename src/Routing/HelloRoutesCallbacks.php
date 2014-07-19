<?php

namespace Drupal\hello\Routing;

use Symfony\Component\Routing\Route;

class HelloRoutesCallbacks
{
  public function getRoutes()
    {
      $routes = [];
      $routes['hello.dynamic_route'] = new Route(
        '/hello_dynamic/{name}',
        [
          '_title' => 'Dynamic Router @test',
          '_title_arguments' => ['@test' => 'Demonstration'],
          '_content' => '\Drupal\hello\Controller\HelloController::drupal8Name',
          'name' => 'Dynamic Router',
        ],
        ['_permission' => 'access content']
      );

      return $routes;
    }
}
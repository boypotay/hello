<?php

namespace Drupal\hello\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

class RouteSubscriber extends RouteSubscriberBase
{

    protected function alterRoutes(RouteCollection $collection)
    {
        if ($route = $collection->get('hello.argument')) {
            $route->setDefault('name', 'Nguyen Tran');
        }
    }

}
<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.s.PIIJ0' shared service.

return $this->privates['.service_locator.s.PIIJ0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'tag' => array('privates', '.errored..service_locator.s.PIIJ0.App\\Entity\\Tag', NULL, 'Cannot autowire service ".service_locator.s.PIIJ0": it references class "App\\Entity\\Tag" but no such service exists.'),
));
<?php

namespace Resplendor;

use Respect\Config\Container;

class Application
{
    public $config;
    function __construct()
    {
        //creating the meta-container
        $this->config = new Container('config/config.ini');
        //loading the real container configured
        $this->config = $this->config->container;
    }
    function __toString()
    {
        return (string) $this->config->template->render(
            $this->config->router->run()
        );
    }
}

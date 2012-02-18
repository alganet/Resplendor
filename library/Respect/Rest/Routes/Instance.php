<?php

namespace Respect\Rest\Routes;

use ReflectionMethod;
use InvalidArgumentException;
use Respect\Rest\Routable;

class Instance extends AbstractRoute
{

    protected $instance = null;
    /** @var ReflectionMethod */
    protected $reflection;

    public function __construct($method, $pattern, $instance)
    {
        $this->instance = $instance;
        parent::__construct($method, $pattern);
    }

    public function getReflection($method)
    {
        if (empty($this->reflection))
            $this->reflection = new ReflectionMethod(
                    $this->instance, $method
            );

        return $this->reflection;
    }

    public function runTarget($method, &$params)
    {
        if (!$this->instance instanceof Routable)
            throw new InvalidArgumentException(''); //TODO

            return call_user_func_array(
            array($this->instance, $method), $params
        );
    }

}

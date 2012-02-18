<?php

namespace Resplendor\Controllers;

use Respect\Rest\Routable;

class Index implements Routable
{
    function get()
    {
        return array('oi');
    }
}

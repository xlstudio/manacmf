<?php

namespace Application\Home;

use ManaPHP\Mvc\Router\Group;

class RouteGroup extends Group
{
    public function __construct()
    {
        parent::__construct(true);
    }
}

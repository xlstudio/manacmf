<?php

namespace Application\Home;

class Module extends \ManaPHP\Mvc\Module
{
    public function registerServices($di)
    {
    }

    public function authorize($controller, $action)
    {
        return true;
    }
}

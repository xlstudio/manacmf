<?php

namespace Application\Admin\Controllers;

class IndexController extends ControllerBase
{
    public function indexAction()
    {
        $respStr = 'This is admin! The web application is running!';

        return response()->setContent($respStr);
    }
}

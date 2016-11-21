<?php

namespace Application\Home\Controllers;

class IndexController extends ControllerBase
{
    public function indexAction()
    {
        $respStr = 'This is home! The web application is running!';

        return response()->setContent($respStr);
    }
}

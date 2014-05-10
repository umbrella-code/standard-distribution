<?php

namespace Project\Controller\Testing\Parent\Directories;

use Umbrella\Source\Controller;

class HelloController extends Controller
{
    public function helloAction($name = '')
    {
        return $this->render('welcome.html.twig', array(
            'name' => $name
        ));
    }
}
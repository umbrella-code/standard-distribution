<?php

namespace Umbrella\Controller;

use Umbrella\Source\Controller;

class WelcomeController extends Controller
{
    public function indexAction()
    {
        $text = 'Welcome back!';
        
        $this->render('welcome.html.twig', array(
            'text' => $text
        ));
    }
}
<?php

namespace Umbrella\Controller;

use Umbrella\Source\Controller;
use Project\Model\User;

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
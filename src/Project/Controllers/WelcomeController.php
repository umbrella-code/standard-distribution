<?php

namespace Project\Controllers;

use Umbrella\Source\Controller;
use Project\Models\User;

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
<?php

/**
 * You must use a namespace based on where the file is located. 
 */

namespace Project\Controllers;

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
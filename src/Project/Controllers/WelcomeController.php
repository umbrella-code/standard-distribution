<?php

/**
 * You must use a namespace based on where the file is located. 
 */

namespace Project\Controllers;

use Umbrella\Source\Controller;
use Project\Models\User;

class WelcomeController extends Controller
{
    public function indexAction()
    {
        $user = new User();
        $em = $this->getManager();

        $user->setFirstName('Zach');
        $user->setLastName('Starnes');
        $user->setEmail('zachstarnes@gmail.com');
        $user->setUsername('test');

        $em->persist($user);
        $em->flush();

        $text = 'Welcome back!';
        
        $this->render('welcome.html.twig', array(
            'text' => $text
        ));
    }
}
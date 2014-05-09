<?php

namespace Project\Controllers;

use Umbrella\Source\Controller;
use Project\Models\User;

class WelcomeController extends Controller
{
    public function indexAction()
    {
        $em = $this->getManager();

        $user = new User();
        $user->setFirstName('Zach');
        $user->setLastName('Starn');

        $v = $this->getValidator();
        $v->validate($user);

        if($v->passed())
        {
            $em->persist($user);
            $em->flush();
        }

        $text = 'Welcome back!';
        
        $this->render('welcome.html.twig', array(
            'text' => $text,
            'errors' => $v->getErrors()
        ));
    }
}
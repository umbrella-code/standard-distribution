<?php

namespace Project\Controller;

use Umbrella\Source\Controller;
use Project\Model\User;

class WelcomeController extends Controller
{
    public function indexAction()
    {
        $em = $this->getManager();

        $user = new User();
        $user->setFirstName('Zach');
        $user->setLastName('Starnes');

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
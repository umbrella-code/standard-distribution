<?php

class WelcomeController
{
    public function indexAction()
    {
        Twig_Autoloader::register();

        $loader = new Twig_Loader_Filesystem(__DIR__.'/../Views');
        $twig = new Twig_Environment($loader, array(
            'cache' => __DIR__.'/../../app/cache/twig',
            'auto_reload' => true
        ));

        echo $twig->render('welcome.html.twig', array('logo' => __DIR__.'/../public/img/umbrella.png'));
    }
}
<?php

class HelloController
{
    public function helloAction($name = 'No Name')
    {
        echo 'Hello ' . $name;
    }
}
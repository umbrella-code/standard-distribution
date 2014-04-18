<?php

class HelloController
{
    public function helloAction($name = '')
    {
        echo 'Hello ' . $name;
    }
}
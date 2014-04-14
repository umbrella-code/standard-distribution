<?php

class TestController
{
    public function __construct()
    {
        echo "Construct called.<br /><br />";
    }

    public function index()
    {
        echo "Index method called.";
    }

    public function hello($name)
    {
        echo 'Hello ' . $name . '! Welcome to Umbrella.';
    }
}
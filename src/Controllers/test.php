<?php

class test
{
    public function __construct()
    {
        echo "Construct called.";
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
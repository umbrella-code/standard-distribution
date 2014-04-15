<?php

class TestController
{
    public function __construct()
    {
        echo "Construct called.<br /><br />";
    }

    public function indexAction()
    {
        echo "Index method called.";
    }
}
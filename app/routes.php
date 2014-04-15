<?php

return array(

    //---------------------------------------------------------------------------
    // Add all of your routes here
    //---------------------------------------------------------------------------
    array(
        'name'          => 'test_route',
        'path'          => '/test',
        'controller'    => 'TestController',
        'action'        => 'indexAction'
    ),

    array(
        'name'          => 'hello_route',
        'path'          => '/hello',
        'controller'    => 'HelloController',
        'action'        => 'helloAction'
    )
);
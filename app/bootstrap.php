<?php

//---------------------------------------------------------------------------
// Load the composer autoload file
//---------------------------------------------------------------------------
if(file_exists('../vendor/autoload.php'))
{
    require '../vendor/autoload.php';
}
else
{
    throw new Exception("The composer autoload file was not found. Please run <pre>composer install</pre> or check the location of the autoload file.");
}

//---------------------------------------------------------------------------
// Require all settings and routes used by Umbrella
//---------------------------------------------------------------------------
$paths  = require __DIR__.'/config/paths.php';
$routes = require __DIR__.'/routes.php';

//---------------------------------------------------------------------------
// Create a new instance of the Application
//---------------------------------------------------------------------------
$app = new Umbrella\Foundation\Application;

//---------------------------------------------------------------------------
// Bind the parameters and routes to the app
//---------------------------------------------------------------------------
$app->bindPaths($paths);
$app->bindRoutes($routes);

//---------------------------------------------------------------------------
// Send the newly created app
//---------------------------------------------------------------------------
return $app;
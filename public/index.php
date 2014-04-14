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
// Require all files used by Umbrella
//---------------------------------------------------------------------------
$db = require __DIR__.'/../app/config/config.php';
$paths = require __DIR__.'/../app/config/paths.php';

//---------------------------------------------------------------------------
// Create a new instance of the Application
//---------------------------------------------------------------------------
$app = new Umbrella\Foundation\Application;

//---------------------------------------------------------------------------
// Bind the parameters and config setting to the app
//---------------------------------------------------------------------------
$app->bindPaths($paths);

//---------------------------------------------------------------------------
// Run the app.
//---------------------------------------------------------------------------
$app->run();
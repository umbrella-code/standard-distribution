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
    throw new Exception("The composer autoload file was not found. Please run composer install or check the location of the autoload file.");
}

//---------------------------------------------------------------------------
// Require all settings used by Umbrella
//---------------------------------------------------------------------------
$paths  = require __DIR__.'/paths.php';
$db     = require __DIR__.'/database.php';

//---------------------------------------------------------------------------
// Create a new instance of the Application
//---------------------------------------------------------------------------
$app = new Umbrella\Foundation\Application($paths, $db);

//---------------------------------------------------------------------------
// Send the newly created app
//---------------------------------------------------------------------------
return $app;
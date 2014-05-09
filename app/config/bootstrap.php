<?php

//---------------------------------------------------------------------------
// Load the composer autoload file
//---------------------------------------------------------------------------
if(file_exists(__DIR__.'/../../vendor/autoload.php'))
{
    require __DIR__.'/../../vendor/autoload.php';
}
else
{
    throw new Exception("The composer autoload file was not found. Please run composer install or check the location of the autoload file.");
}

require __DIR__.'/../../vendor/umbrella-mvc/framework/src/Umbrella/Foundation/global.php';

//---------------------------------------------------------------------------
// Require all settings used by Umbrella
//---------------------------------------------------------------------------
$paths  = require __DIR__.'/paths.php';
$params = require __DIR__.'/database.php';

//---------------------------------------------------------------------------
// Create a new instance of the Application
//---------------------------------------------------------------------------
$app = new Umbrella\Foundation\Application($paths, $params);

//---------------------------------------------------------------------------
// Send the newly created app
//---------------------------------------------------------------------------
return $app;
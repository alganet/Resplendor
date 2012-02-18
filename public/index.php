<?php

//changing the directory to the application root
chdir('..');
//registering our code library
set_include_path('library' . PATH_SEPARATOR . get_include_path());
spl_autoload_register(include 'Respect/Loader.php');

print new Resplendor\Application;

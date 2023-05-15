<?php


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    // Callbacks
    'Videohandbuch' => 'system/modules/videohandbuch/callbacks/Videohandbuch.php',

    // Classes
    'AcademyHelper' => 'system/modules/videohandbuch/classes/AcademyHelper.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    'be_videohandbuch' => 'system/modules/videohandbuch/templates',
));

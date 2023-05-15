<?php


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    // Callbacks
    'Videohandbuch' => 'system/modules/contao_videohandbuch/callbacks/Videohandbuch.php',

    // Classes
    'AcademyHelper' => 'system/modules/contao_videohandbuch/classes/AcademyHelper.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    'be_videohandbuch' => 'system/modules/contao_videohandbuch/templates',
));

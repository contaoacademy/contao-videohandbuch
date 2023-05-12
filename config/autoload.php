<?php


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    // Callbacks
    'Videohandbuch' => 'system/modules/contao_academy_client/callbacks/Videohandbuch.php',

    // Classes
    'AcademyHelper' => 'system/modules/contao_academy_client/classes/AcademyHelper.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    'be_contao_academy_default' => 'system/modules/contao_academy_client/templates',
));

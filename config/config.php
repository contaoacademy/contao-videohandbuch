<?php

/**
 *
 *    Author: Michael Fleischmann, Christian Feneberg
 *    Copyright: Contao Academy
 *
 */

define('academy_client', '1.2.0');

if (file_exists(TL_ROOT . '/system/modules/contao_academy_client/classes/AcademyHelper.php')):
    $GLOBALS['TL_HOOKS']['outputBackendTemplate'][] = array('AcademyHelper', 'HeaderVideohandbuch');
endif;

// CSS und JS fuer Backendview Academy
if (TL_MODE == 'BE') {
    $GLOBALS['TL_CSS'][] = 'system/modules/contao_academy_client/assets/glightbox.css||static';
    $GLOBALS['TL_CSS'][] = 'system/modules/contao_academy_client/assets/academy.css||static';

    if (\Input::get('id') && \Input::get('do') == 'Videohandbuch') // Detailseite
    {

    }
}

array_insert($GLOBALS['BE_MOD'], 1, array
(
    'contao_academy' => array
    (
        'Videohandbuch' => array
        (
            'callback' => 'Videohandbuch',
            'icon' => 'system/modules/contao_academy_client/assets/icon.jpg',
        ),
    )
));


$GLOBALS['CA']['SERVER'] = 'https://contao-academy.de/system/modules/contao_academy_server/public/index.php';

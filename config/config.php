<?php

/**
 *
 *    Author: Michael Fleischmann, Christian Feneberg
 *    Copyright: Contao Academy
 *
 */

const academy_client = '1.3.0';

if (file_exists(TL_ROOT . '/system/modules/contao_academy_client/classes/AcademyHelper.php')):
    $GLOBALS['TL_HOOKS']['outputBackendTemplate'][] = array('AcademyHelper', 'HeaderVideohandbuch');
endif;

// CSS und JS fuer Backendview Academy
if (TL_MODE == 'BE') {
    $GLOBALS['TL_CSS'][] = 'system/modules/contao_academy_client/assets/academy.css|static';

    if (Input::get('do') == 'Videohandbuch')
    {
        $GLOBALS['TL_CSS'][] = 'system/modules/contao_academy_client/assets/glightbox.css|static';
        $GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/contao_academy_client/assets/glightbox.js|static';
    }
}

array_insert($GLOBALS['BE_MOD'], 1, array
(
    'contao_academy' => array
    (
        'Videohandbuch' => array
        (
            'callback' => 'Videohandbuch',
        ),
    )
));
